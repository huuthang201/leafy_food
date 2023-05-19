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
                'image' => 'https://product.hstatic.net/200000531059/product/bun_them_f8f5abad97c04ac6b6cac0bc36f18523_1024x1024.jpg',
                'description' => 'Bún là một loại mì truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như bún bò, bún riêu, bún chả, bún thịt nướng, bún mọc, bún đậu mắm tôm, bún cá, bún ốc, bún chả cá, bún chả giò, bún chả cá thì là, bún chả cá lóc, bún chả cá nướng, bún chả cá chép, bún chả cá lăng, bún chả cá nai, bún chả cá trê'
            ],
            [
                'category_name' => 'Mỳ',
                'image' => 'https://www.huongnghiepaau.com/wp-content/uploads/2019/01/my-y-chay.jpg',
                'description' => 'Mì là một loại mì truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như mì bò, mì riêu, mì chả, mì thịt nướng, mì mọc, mì đậu mắm tôm, mì cá, mì ốc, mì chả cá, mì chả cá thì là, mì chả cá lóc, mì chả cá nướng, mì chả cá chép, mì chả cá lăng, mì chả cá nai, mì chả cá trê'
            ],
            [
                'category_name' => 'Gạo',
                'image' => 'https://vtv1.mediacdn.vn/thumb_w/650/2022/12/6/gao-1670292672786683247762-crop-167029267943872062675.jpg',
                'description' => 'Gạo là một loại gạo truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như gạo bò, gạo riêu, gạo chả, gạo thịt nướng, gạo mọc, gạo đậu mắm tôm, gạo cá, gạo ốc, gạo chả cá, gạo chả cá thì là, gạo chả cá lóc, gạo chả cá nướng, gạo chả cá chép, gạo chả cá lăng, gạo chả cá nai, gạo chả cá trê'
            ],
            [
                'category_name' => 'Bánh canh',
                'image' => 'https://traicaycaonghe.vn/wp-content/uploads/2021/07/lam-mon-banh-canh-bot-loc.jpg',
                'description' => 'Bánh canh là một loại bánh truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như bánh canh bò, bánh canh riêu, bánh canh chả, bánh canh thịt nướng, bánh canh mọc, bánh canh đậu mắm tôm, bánh canh cá, bánh canh ốc, bánh canh chả cá, bánh canh chả cá thì là, bánh canh chả cá lóc, bánh canh chả cá nướng, bánh canh chả cá chép, bánh canh chả cá lăng, bánh canh chả cá nai, bánh canh chả cá trê'
            ],
            [
                'category_name' => 'Nui',
                'image' => 'https://cdn.tgdd.vn/2021/12/CookDish/cac-loai-nui-thong-dung-tren-thi-truong-va-cac-mon-voi-nui-avt-1200x676.jpg',
                'description' => 'Nui là một loại nui truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như nui bò, nui riêu, nui chả, nui thịt nướng, nui mọc, nui đậu mắm tôm, nui cá, nui ốc, nui chả cá, nui chả cá thì là, nui chả cá lóc, nui chả cá nướng, nui chả cá chép, nui chả cá lăng, nui chả cá nai, nui chả cá trê'
            ],
            [
                'category_name' => 'Các Loại Hạt, Ngủ Cốc',
                'image' => 'https://vinmec-prod.s3.amazonaws.com/images/20200729_042734_540387_che-do-an-kieng-.max-1800x1800.png',
                'description' => 'Các Loại Hạt, Ngủ Cốc là một loại hạt, ngũ cốc truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như hạt, ngũ cốc bò, hạt, ngũ cốc riêu, hạt, ngũ cốc chả, hạt, ngũ cốc thịt nướng, hạt, ngũ cốc mọc, hạt, ngũ cốc đậu mắm tôm, hạt, ngũ cốc cá, hạt, ngũ cốc ốc, hạt, ngũ cốc chả cá, hạt, ngũ cốc chả cá thì là, hạt, ngũ cốc chả cá lóc, hạt, ngũ cốc chả cá nướng, hạt, ngũ cốc chả cá chép, hạt, ngũ cốc chả cá lăng, hạt, ngũ cốc chả cá nai, hạt, ngũ cốc chả cá trê'
            ],
            [
                'category_name' => 'Bánh',
                'image' => 'https://www.cet.edu.vn/wp-content/uploads/2022/01/cach-lam-banh-ran-doremon-1.jpg',
                'description' => 'Bánh là một loại bánh truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như bánh bò, bánh riêu, bánh chả, bánh thịt nướng, bánh mọc, bánh đậu mắm tôm, bánh cá, bánh ốc, bánh chả cá, bánh chả cá thì là, bánh chả cá lóc, bánh chả cá nướng, bánh chả cá chép, bánh chả cá lăng, bánh chả cá nai, bánh chả cá trê'
            ],
            [
                'category_name' => 'Gia vị',
                'image' => 'https://www.cet.edu.vn/wp-content/uploads/2022/01/cach-lam-banh-ran-doremon-1.jpg',
                'description' => 'Gia vị là một loại gia vị truyền thống của người Việt Nam, được làm từ bột gạo, có dạng sợi dài, màu trắng, dùng để chế biến các món ăn như gia vị bò, gia vị riêu, gia vị chả, gia vị thịt nướng, gia vị mọc, gia vị đậu mắm tôm, gia vị cá, gia vị ốc, gia vị chả cá, gia vị chả cá thì là, gia vị chả cá lóc, gia vị chả cá nướng, gia vị chả cá chép, gia vị chả cá lăng, gia vị chả cá nai, gia vị chả cá trê'
            ],
        ];
        foreach ($data as $key => $value) {
            Category::create($value);
        }
    }
}
