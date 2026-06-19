<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest()
            ->paginate(10);

        return view(
            'admin.categories.index',
            compact('categories')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view(
            'admin.categories.create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(
        StoreCategoryRequest $request
    )
    {
        $data = $request->validated();

        $data['slug'] =
            Str::slug($request->name);

        if($request->hasFile('image'))
        {
            $data['image'] =
                $request->file('image')
                ->store(
                    'categories',
                    'public'
                );
        }

        $data['status'] =
            $request->has('status');

        Category::create($data);

        return redirect()
            ->route(
                'admin.categories.index'
            )
            ->with(
                'success',
                'Category Created'
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
        Category $category
    )
    {
        return view(
            'admin.categories.edit',
            compact('category')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        UpdateCategoryRequest $request,
        Category $category
    )
    {
        $data = $request->validated();

        $data['slug'] =
            Str::slug($request->name);

        if($request->hasFile('image'))
        {
            $data['image'] =
                $request->file('image')
                ->store(
                    'categories',
                    'public'
                );
        }

        $data['status'] =
            $request->has('status');

        $category->update($data);

        return redirect()
            ->route(
                'admin.categories.index'
            )
            ->with(
                'success',
                'Category Updated'
            );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Category $category
    )
    {
        $category->delete();

        return redirect()
            ->back()
            ->with(
                'success',
                'Category Deleted'
            );
    }
}
