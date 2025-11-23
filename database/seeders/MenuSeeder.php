<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $menus = [
            [
                'name' => 'Americano',
                'description' => 'Kopi hitam klasik dengan cita rasa kuat dan aroma khas.',
                'price' => 16000,
                'image_path' => 'images/americano.jpg'
            ],
            [
                'name' => 'A-Milk',
                'description' => 'Perpaduan lembut susu segar dengan espresso pilihan.',
                'price' => 16000,
                'image_path' => 'images/A-milk.jpg'
            ],
            [
                'name' => 'Blue Sparkling',
                'description' => 'Segar dan berkilau dengan sensasi rasa buah tropis.',
                'price' => 22000,
                'image_path' => 'images/blue-sparkling.jpg'
            ],
            [
                'name' => 'Cokelat',
                'description' => 'Minuman cokelat premium untuk pecinta rasa manis klasik.',
                'price' => 19000,
                'image_path' => 'images/coklat.jpg'
            ],
            [
                'name' => 'Gede Aren',
                'description' => 'Manis alami dari gula aren berpadu dengan kopi khas GD.',
                'price' => 19000,
                'image_path' => 'images/gede-aren.jpg'
            ],
            [
                'name' => 'Gede Caramel',
                'description' => 'Rasa manis gurih karamel yang bikin nagih.',
                'price' => 19000,
                'image_path' => 'images/gede-caramel.jpg'
            ],
            [
                'name' => 'Gede Hazelnut',
                'description' => 'Sentuhan kacang hazelnut yang wangi dan creamy.',
                'price' => 19000,
                'image_path' => 'images/gede-hazelnut.jpg'
            ],
            [
                'name' => 'Gede Vanilla',
                'description' => 'Perpaduan kopi dan vanilla yang lembut di lidah.',
                'price' => 19000,
                'image_path' => 'images/gede-vanila.jpg'
            ],
            [
                'name' => 'Lemon Tea',
                'description' => 'Kesegaran teh lemon yang pas buat semua suasana.',
                'price' => 19000,
                'image_path' => 'images/lemon-tea.jpg'
            ],
            [
                'name' => 'Mango Yakult',
                'description' => 'Kombinasi mangga segar dan yakult yang unik.',
                'price' => 22000,
                'image_path' => 'images/mango-yakult.jpg'
            ],
            [
                'name' => 'Matcha',
                'description' => 'Rasa autentik matcha Jepang, lembut dan menenangkan.',
                'price' => 19000,
                'image_path' => 'images/matcha.jpg'
            ],
            [
                'name' => 'Orange Yakult',
                'description' => 'Paduan yakult dan jeruk yang menyegarkan.',
                'price' => 22000,
                'image_path' => 'images/orange-yakult.jpg'
            ],
            [
                'name' => 'Red Velvet',
                'description' => 'Manis, lembut, dan elegan dengan cita rasa khas red velvet.',
                'price' => 19000,
                'image_path' => 'images/red-velvet.jpg'
            ],
            [
                'name' => 'Taro',
                'description' => 'Minuman ungu lembut dengan rasa talas yang creamy.',
                'price' => 19000,
                'image_path' => 'images/taro.jpg'
            ],
        ];

        foreach ($menus as $menu) {
            Menu::create($menu);
        }
    }
}
