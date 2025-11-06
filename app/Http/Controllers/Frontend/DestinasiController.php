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

        return view('frontend.destinasi.index', compact('destinations', 'categories'));
    }

    public function show (Destination $destination) 
    {
        $categories = Category::get();
        return view('frontend.destinasi.detail', compact('destination', 'categories'));
    }

    public function category(Category $category)
    {
        $categories = Category::get();
        return view('frontend.destinasi.category', compact('category','categories'));
    }
}