<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::get();
        $galleries = Gallery::get();
        $categories = Category::get();
        
        // SEO Meta Data
        $seo = seo_meta(
            title: 'Beranda',
            description: 'Selamat datang di Desa Wisata Jehem. Jelajahi keindahan alam, budaya, dan destinasi wisata menarik di desa wisata terbaik di Indonesia.',
            url: route('home')
        );

        return view('frontend.home',compact('destinations','galleries','categories', 'seo'));
    }
}