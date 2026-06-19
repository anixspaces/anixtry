<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Contact;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProducts = Product::count();

        $totalCategories = Category::count();

        $totalGalleries = Gallery::count();

        $totalContacts = Contact::count();

        $latestProducts = Product::latest()
            ->take(5)
            ->get();

        $latestContacts = Contact::latest()
            ->take(5)
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'totalProducts',
                'totalCategories',
                'totalGalleries',
                'totalContacts',
                'latestProducts',
                'latestContacts'
            )
        );
    }
}