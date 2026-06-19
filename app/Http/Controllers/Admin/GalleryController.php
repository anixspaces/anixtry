<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Str;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::latest()
            ->paginate(10);

        return view(
            'admin.galleries.index',
            compact('galleries')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'admin.galleries.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(
        StoreGalleryRequest $request
    )
    {
        $data = $request->validated();

        $data['slug'] =
            Str::slug($request->title);

        if($request->hasFile('image'))
        {
            $data['image'] =
                $request->file('image')
                ->store(
                    'galleries',
                    'public'
                );
        }

        Gallery::create($data);

        return redirect()
            ->route(
                'admin.galleries.index'
            )
            ->with(
                'success',
                'Gallery Created'
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(
        Gallery $gallery
    )
    {
        return view(
            'admin.galleries.edit',
            compact('gallery')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateGalleryRequest $request,
        Gallery $gallery
    )
    {
        $data = $request->validated();

        $data['slug'] =
            Str::slug($request->title);

        if($request->hasFile('image'))
        {
            $data['image'] =
                $request->file('image')
                ->store(
                    'galleries',
                    'public'
                );
        }

        $gallery->update($data);

        return redirect()
            ->route(
                'admin.galleries.index'
            )
            ->with(
                'success',
                'Gallery Updated'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Gallery $gallery
    )
    {
        $gallery->delete();

        return redirect()
            ->back()
            ->with(
                'success',
                'Gallery Deleted'
            );
    }
}
