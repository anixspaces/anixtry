<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
class GalleryController extends Controller
{
    public function index()
    {
        $query = Gallery::query();

        if(request('room_type'))
        {
            $query->where(
                'room_type',
                request('room_type')
            );
        }

        if(request('search'))
        {
            $query->where(
                'title',
                'like',
                '%'.request('search').'%'
            );
        }

        $galleries = $query
            ->latest()
            ->paginate(12)
            ->withQueryString();

        return view(
            'frontend.gallery.index',
            compact('galleries')
        );
    }

    public function show($slug)
    {
        $gallery = Gallery::where(
            'slug',
            $slug
        )->firstOrFail();

        $relatedImages = Gallery::where(
            'room_type',
            $gallery->room_type
        )
        ->where('id','!=',$gallery->id)
        ->take(4)
        ->get();

        return view(
            'frontend.gallery.show',
            compact(
                'gallery',
                'relatedImages'
            )
        );
    }
}
