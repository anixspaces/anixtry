<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = [

        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'color',
        'color_code',
        'finish',
        'coverage',
        'drying_time',
        'image',
        'featured',
        'status'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
