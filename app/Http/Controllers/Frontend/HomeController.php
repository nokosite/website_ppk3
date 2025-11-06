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

        return view('frontend.home',compact('destinations','galleries','categories'));
    }
}