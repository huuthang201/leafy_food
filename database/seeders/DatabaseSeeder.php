<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $cate = Category::where('id', '!=', '')->first();
        $product = Product::where('id', '!=', '')->first();
        $user = User::where('id', '!=', '')->first();
        if (!$cate)
        {
            $this->call([
                CategorySeeder::class,
            ]);
        }
        if (!$product)
        {
            $this->call([
                ProductSeeder::class,
            ]);
        }

        if (!$user)
        {
            $this->call([
                UserSeeder::class,
            ]);
        }
    }
}
