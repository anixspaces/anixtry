<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
class HomeController extends Controller
{
   public function index()
    {
        $featuredProducts = Product::where(
            'featured',
            true
        )->take(8)->get();

        $categories = Category::latest()->get();

        $galleries = Gallery::latest()
            ->take(6)
            ->get();

        return view(
            'frontend.home',
            compact(
                'featuredProducts',
                'categories',
                'galleries'
            )
        );
    }
}