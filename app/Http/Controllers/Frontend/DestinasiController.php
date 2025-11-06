<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DestinasiController extends Controller
{
    public function index () 
    {
        $categories = Category::get();
        $destinations = Destination::get();
        
        // SEO Meta Data
        $seo = seo_meta(
            title: 'Destinasi Wisata',
            description: 'Jelajahi berbagai destinasi wisata menarik di Desa Wisata Jehem. Temukan tempat-tempat indah dan unik untuk dikunjungi.',
            url: route('destination')
        );

        return view('frontend.destinasi.index', compact('destinations', 'categories', 'seo'));
    }

    public function show (Destination $destination) 
    {
        $categories = Category::get();
        
        // SEO Meta Data
        $seo = seo_meta(
            title: $destination->judul,
            description: strip_tags($destination->excerpt) ?: 'Jelajahi destinasi wisata ' . $destination->judul . ' di Desa Wisata Jehem.',
            image: storage_url_safe($destination->gambar),
            url: route('destination.show', $destination->slug),
            type: 'article'
        );
        
        return view('frontend.destinasi.detail', compact('destination', 'categories', 'seo'));
    }

    public function category(Category $category)
    {
        $categories = Category::get();
        
        // SEO Meta Data
        $seo = seo_meta(
            title: 'Destinasi ' . $category->name,
            description: $category->seo_description ?? 'Jelajahi destinasi wisata kategori ' . $category->name . ' di Desa Wisata Jehem.',
            url: route('destination.category', $category->slug)
        );
        
        return view('frontend.destinasi.category', compact('category','categories', 'seo'));
    }
}