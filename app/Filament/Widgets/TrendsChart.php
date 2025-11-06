<?php

namespace App\Filament\Widgets;

use App\Models\Destination;
use App\Models\Gallery;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class TrendsChart extends ChartWidget
{
    protected static ?string $heading = 'Tren Konten 6 Bulan Terakhir';

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $months = Collection::times(6, function ($i) {
            return Carbon::now()->startOfMonth()->subMonths(6 - $i);
        });

        $labels = $months->map(fn (Carbon $d) => $d->isoFormat('MMM YYYY'))->all();

        // Destinations per month
        $destinations = Destination::query()
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as ym'), DB::raw('COUNT(*) as total'))
            ->where('created_at', ">=", $months->first()->startOfMonth())
            ->groupBy('ym')
            ->pluck('total', 'ym');

        $destinationsSeries = $months->map(function (Carbon $d) use ($destinations) {
            $key = $d->format('Y-m');
            return (int) ($destinations[$key] ?? 0);
        })->all();

        // Galleries per month
        $galleries = Gallery::query()
            ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m") as ym'), DB::raw('COUNT(*) as total'))
            ->where('created_at', ">=", $months->first()->startOfMonth())
            ->groupBy('ym')
            ->pluck('total', 'ym');

        $galleriesSeries = $months->map(function (Carbon $d) use ($galleries) {
            $key = $d->format('Y-m');
            return (int) ($galleries[$key] ?? 0);
        })->all();

        return [
            'datasets' => [
                [
                    'label' => 'Destinasi',
                    'data' => $destinationsSeries,
                    'borderColor' => '#0ea5e9',
                    'backgroundColor' => 'rgba(14,165,233,0.20)',
                    'pointBackgroundColor' => '#0ea5e9',
                    'pointBorderColor' => '#fff',
                    'pointHoverRadius' => 5,
                    'pointRadius' => 3,
                    'borderWidth' => 2,
                    'tension' => 0.35,
                    'fill' => true,
                ],
                [
                    'label' => 'Galeri',
                    'data' => $galleriesSeries,
                    'borderColor' => '#f59e0b',
                    'backgroundColor' => 'rgba(245,158,11,0.20)',
                    'pointBackgroundColor' => '#f59e0b',
                    'pointBorderColor' => '#fff',
                    'pointHoverRadius' => 5,
                    'pointRadius' => 3,
                    'borderWidth' => 2,
                    'tension' => 0.35,
                    'fill' => true,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getOptions(): array
    {
        return [
            'responsive' => true,
            'maintainAspectRatio' => false,
            'interaction' => [
                'mode' => 'index',
                'intersect' => false,
            ],
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                    'labels' => [
                        'usePointStyle' => true,
                        'pointStyle' => 'circle',
                    ],
                ],
                'tooltip' => [
                    'enabled' => true,
                    'usePointStyle' => true,
                    'callbacks' => [
                        'label' => \Filament\Support\RawJs::make('(ctx) => ` ${ctx.dataset.label}: ${ctx.parsed.y} `'),
                    ],
                ],
                'title' => [
                    'display' => false,
                ],
            ],
            'scales' => [
                'x' => [
                    'grid' => [
                        'display' => false,
                    ],
                ],
                'y' => [
                    'beginAtZero' => true,
                    'grid' => [
                        'color' => 'rgba(0,0,0,0.06)',
                    ],
                    'ticks' => [
                        'precision' => 0,
                        'stepSize' => 1,
                    ],
                ],
            ],
            'elements' => [
                'line' => [
                    'borderJoinStyle' => 'round',
                    'capBezierPoints' => false,
                ],
            ],
        ];
    }
}


