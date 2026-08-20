<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            [
                'name' => 'Black Signature',
                'description' => 'Humic Acid Flakes',
                'category' => 'Humic',
            ],

            [
                'name' => 'Hercules',
                'description' => 'Takatwar',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Jaljala',
                'description' =>
                    '5 ml / 10 ml • Flowering / Fruiting • Japani',
                'category' => 'Plant Growth',
            ],

            [
                'name' => 'Japani',
                'description' => 'Jaljala',
                'category' => 'Plant Growth',
            ],

            [
                'name' => 'Regardelgo',
                'description' => 'Renwald',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Kingdom',
                'description' => 'Amino Acid Technical',
                'category' => 'Amino',
            ],

            [
                'name' => 'Chandu Champion',
                'description' => 'Amino - Fulvic',
                'category' => 'Amino / Fulvic',
            ],

            [
                'name' => 'Black Bull',
                'description' =>
                    'Humic Liquid 6% / 18% / 12% • 100 ml / 250 ml / 500 ml / 1000 ml',
                'category' => 'Humic',
            ],

            [
                'name' => 'Crafter',
                'description' => 'Atomic',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Sanki Soldier',
                'description' => 'Mix',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Doctor Kishan',
                'description' => 'Micronutrients',
                'category' => 'Micronutrient',
            ],

            [
                'name' => 'Siam Smart Sikh',
                'description' => 'Granule',
                'category' => 'Granule',
            ],

            [
                'name' => 'Saitan Bull',
                'description' => 'Agriculture Input',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'The Legend',
                'description' => 'Agriculture Input',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Big Legend',
                'description' => 'Agriculture Input',
                'category' => 'Agriculture Input',
            ],

            [
                'name' => 'Hawk Rock',
                'description' => 'Triazoconazole - Liquid',
                'category' => 'Crop Protection',
            ],

            [
                'name' => 'Best Riveray',
                'description' => 'Bio - Pesticide',
                'category' => 'Bio Pesticide',
            ],

            [
                'name' => 'Only Farmer',
                'description' => 'Bio',
                'category' => 'Bio',
            ],

            [
                'name' => 'Adventure',
                'description' => 'Bio',
                'category' => 'Bio',
            ],

            [
                'name' => 'Hayashi',
                'description' => 'Nawab Bio',
                'category' => 'Bio',
            ],

            [
                'name' => 'Yoshika',
                'description' => 'Bio - Granules',
                'category' => 'Bio Granule',
            ],

            [
                'name' => 'Bramastra',
                'description' => 'Chelated Zinc',
                'category' => 'Micronutrient',
            ],

            [
                'name' => 'Ellora',
                'description' => 'Bio',
                'category' => 'Bio',
            ],

            [
                'name' => 'Chetna',
                'description' => 'Bio',
                'category' => 'Bio',
            ],

            [
                'name' => 'Soorama',
                'description' => 'Granule',
                'category' => 'Granule',
            ],

        ];

        foreach ($products as $index => $item) {

            Product::updateOrCreate(
                [
                    'name' => $item['name'],
                ],
                [
                    'slug' => Str::slug($item['name']),

                    'category' => $item['category'],

                    'short_description' =>
                        $item['description'],

                    'description' =>
                        $item['description'],

                    'stock' => 0,

                    'is_active' => true,

                    'is_featured' => false,

                    'sort_order' => $index + 1,
                ]
            );

        }
    }
}