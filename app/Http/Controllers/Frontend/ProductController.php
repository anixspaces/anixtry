<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
     public function index()
    {
        $query = Product::query()
            ->with('category')
            ->where('status', true);

        // Search
        if(request('search'))
        {
            $query->where('name','like',
                '%'.request('search').'%');
        }

        // Category Filter
        if(request('category'))
        {
            $query->where(
                'category_id',
                request('category')
            );
        }

        // Color Filter
        if(request('color'))
        {
            $query->where(
                'color',
                request('color')
            );
        }

        // Min Price
        if(request('min_price'))
        {
            $query->where(
                'price',
                '>=',
                request('min_price')
            );
        }

        // Max Price
        if(request('max_price'))
        {
            $query->where(
                'price',
                '<=',
                request('max_price')
            );
        }

        $products = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        $categories = Category::all();

        $colors = Product::select('color')
            ->distinct()
            ->pluck('color');

        return view(
            'frontend.products.index',
            compact(
                'products',
                'categories',
                'colors'
            )
        );
    }

    public function show($slug)
    {
        $product = Product::with('category')
            ->where('slug',$slug)
            ->firstOrFail();

        $relatedProducts = Product::where(
                'category_id',
                $product->category_id
            )
            ->where('id','!=',$product->id)
            ->take(4)
            ->get();

        return view(
            'frontend.products.show',
            compact(
                'product',
                'relatedProducts'
            )
        );
    }
}
