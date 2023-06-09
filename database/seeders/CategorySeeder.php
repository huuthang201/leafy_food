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
                // 'id' => 1,
                'category_name'=> 'Trà - Cà phê',
                'image' => 'https://vinmec-prod.s3.amazonaws.com/images/20200610_155602_853230_ca-phe-va-tra.max-800x800.jpg',
                'description' => 'Bún ngô eat clean, bún khô gia truyền'
            ],
            [
                // 'id' => 2,
                'category_name'=> 'Mật ong',
                'image' => 'https://login.medlatec.vn//ImagePath/images/20201003/20201003_mat-ong-1.jpg',
                'description' => 'Bún ngô eat clean, bún khô gia truyền'
            ],
            [
                // 'id' => 3,
                'category_name'=> 'Gạo lứt',
                'image' => 'https://cdn.tgdd.vn/Files/2021/12/31/1408296/gao-lut-la-gi-tim-hieu-cac-loai-gao-lut-tren-thi-truong-202112311339034569.jpg',
                'description' => 'Bún ngô eat clean, bún khô gia truyền'
            ],
            [
                // 'id' => 4,
                'category_name'=> 'Hạt, ngũ cốc',
                'image' => 'https://vinmec-prod.s3.amazonaws.com/images/20200321_101804_608417_ngu-coc-nguyen-hat-.max-1800x1800.jpg',
                'description' => 'Bún ngô eat clean, bún khô gia truyền'
            ],
            [
                // 'id' => 5,
                'category_name'=> 'Combo',
                'image' => 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSGtuXE11JkPdyiEoxlMRuPDIW_xQtPuPwzc7N1hsWIy_WJN5e15eUPkVweqJfBdRGJyuyKtq3Xo3QQsoB_SF5x22VqaWfuwKSvzniG8NQ&usqp=CAs',
                'description' => 'Combo sẽ bao gồm các sản phẩm khác nhau, mỗi loại một ít'
            ],
        ];
        foreach ($data as $key => $value) {
            Category::create($value);
        }
    }
}
