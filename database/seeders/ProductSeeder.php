<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'title' => 'Varen',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'De varen is een groep van ongeveer 10.560 bekende nog levende soorten vaatplanten.',
                'price' => 9.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Gras',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Gras is een belangrijke familie van monocot planten, graslanden bedekken ongeveer 20% van de aardse vegetatie.',
                'price' => 2.49,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Bamboe',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Bamboe is een snelgroeiend gras in de familie Poaceae.',
                'price' => 7.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Klimop',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Klimop is een geslacht van 12-15 soorten klimmende of kruipende altijd groenblijvende houtige planten.',
                'price' => 5.49,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Viooltje',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Viooltjes zijn een geslacht van ongeveer 500 soorten bloeiende planten in de familie Violaceae.',
                'price' => 3.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Aloe Vera',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Aloë vera is een succulente plantensoort die vermoedelijk afkomstig is uit het Arabische schiereiland.',
                'price' => 4.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Krokus',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Krokussen zijn een geslacht van ongeveer 90 soorten bolgewassen uit de lissenfamilie.',
                'price' => 6.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Lavendel',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Lavendel is een geslacht van ongeveer 60 soorten planten uit de lipbloemenfamilie.',
                'price' => 8.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            [
                'title' => 'Orchidee',
                'image' => 'https://as1.ftcdn.net/v2/jpg/00/82/09/38/500_F_82093850_KGABJZijejnFxFXYao7kfksuk5CtZxxj.jpg',
                'description' => 'Orchideeën zijn een van de twee grootste families van bedektzadigen, samen met de composietenfamilie.',
                'price' => 10.99,
                'created_at' => now(),
                'updated_at' => now(),
                'created_by' => 1,
                'updated_by' => 1,
            ],
            
            
        ];

        foreach ($products as $product) {
            Product::create($product);
        } 
    }
}