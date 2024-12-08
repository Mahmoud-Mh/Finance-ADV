<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Correctly import the Category model

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Food', 'Transport', 'Rent', 'Utilities', 'Entertainment'];
        
        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
