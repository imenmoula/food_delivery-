<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

use app\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Fast Food',
            'description' => 'pizza',
            'image' => 'public\image\2652401_QFSSL_SupremePizza_00072-d910a935ba7d448e8c7545a963ed7101.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'Healthy Food',
            'description' => 'salade',
            'image' => 'public\image\images.jpg',
        ]);
        DB::table('categories')->insert([
            'name' => 'traditioonal food',
            'description' => 'couscous',
            'image' => 'public\image\images (1).jpg',
        ]);
    }
}
