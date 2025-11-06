<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Throwable;

class SystemHealthStats extends BaseWidget
{
    protected ?string $heading = 'Kesehatan Sistem';

    protected function getCards(): array
    {
        [$files, $bytes] = Cache::remember('health:storage:public', 600, function () {
            $files = 0;
            $bytes = 0;
            try {
                foreach (Storage::disk('public')->allFiles() as $path) {
                    $files++;
                    $bytes += (int) (Storage::disk('public')->size($path) ?: 0);
                }
            } catch (Throwable $e) {
                // ignore
            }
            return [$files, $bytes];
        });

        $failedJobs = 0;
        try {
            $failedJobs = (int) DB::table('failed_jobs')->count();
        } catch (Throwable $e) {
            // table may not exist
        }

        // Database status
        $dbOk = true;
        try {
            DB::select('select 1');
        } catch (Throwable $e) {
            $dbOk = false;
        }

        $cacheDriver = config('cache.default');
        $queueDriver = config('queue.default');

        return [
            Card::make('Storage (public) files', number_format($files))
                ->description($this->formatBytes($bytes))
                ->color('info')
                ->extraAttributes(['class' => 'min-w-[220px]']),

            Card::make('Failed Jobs', (string) $failedJobs)
                ->description('Queue: ' . $queueDriver)
                ->color($failedJobs > 0 ? 'danger' : 'success')
                ->extraAttributes(['class' => 'min-w-[220px]']),

            Card::make('Database', $dbOk ? 'Connected' : 'Error')
                ->description('Cache: ' . $cacheDriver)
                ->color($dbOk ? 'success' : 'danger')
                ->extraAttributes(['class' => 'min-w-[220px]']),
        ];
    }

    private function formatBytes(int $bytes, int $precision = 2): string
    {
        if ($bytes <= 0) {
            return '0 B';
        }
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $power = (int) floor(log($bytes, 1024));
        $power = min($power, count($units) - 1);
        $value = $bytes / (1024 ** $power);
        return number_format($value, $precision) . ' ' . $units[$power];
    }
}


