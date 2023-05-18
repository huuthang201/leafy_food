<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category_name' => 'Bún',
            ],
            [
                'category_name' => 'Mỳ',
            ],
            [
                'category_name' => 'Gạo',
            ],
            [
                'category_name' => 'Bánh canh',
            ],
            [
                'category_name' => 'Nui',
            ],
            [
                'category_name' => 'Các Loại Hạt, Ngủ Cốc',
            ],
            [
                'category_name' => 'Bánh',
            ],
            [
                'category_name' => 'Gia vị',
            ],
        ];
        foreach ($data as $key => $value) {
            Category::create($value);
        }
    }
}
