<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name'=>'Interior Paints',
                'slug'=>'interior-paints'
            ],
            [
                'name'=>'Exterior Paints',
                'slug'=>'exterior-paints'
            ],
            [
                'name'=>'Waterproofing',
                'slug'=>'waterproofing'
            ],
            [
                'name'=>'Wood Finishes',
                'slug'=>'wood-finishes'
            ]
        ]);
    }
}
