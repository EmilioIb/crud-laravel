<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $subcategories = [
            [
                'category_id' => 1,
                'name' => 'Cellphones and smartphones',
                'slug' => Str::slug('Cellphones and smartphones'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Cellphones and accesories',
                'slug' => Str::slug('Cellphones and accesories'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'TV and audio',
                'slug' => Str::slug('TV and audio'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Audio',
                'slug' => Str::slug('Audio'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Car audio',
                'slug' => Str::slug('Car audio'),
                'color' => true,
            ],
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'PlayStation',
                'slug' => Str::slug('PlayStation'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'PC games',
                'slug' => Str::slug('PC games'),
                'color' => false,
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
                'color' => false,
            ],
            [
                'category_id' => 4,
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'PC Desktop',
                'slug' => Str::slug('PC Desktop'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Storage',
                'slug' => Str::slug('Storage'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Computer accesories',
                'slug' => Str::slug('Computer accesories'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Women',
                'slug' => Str::slug('Women'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Men',
                'slug' => Str::slug('Men'),
                'color' => true,
                'size' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Watches',
                'slug' => Str::slug('Watches'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Glasses',
                'slug' => Str::slug('Glasses'),
                'color' => true,
            ],
        ];

        //A cada elemento del arreglo subcategories le creara una imagen
        foreach($subcategories as $subcategory){
            Subcategory::factory(1)->create($subcategory);
        }
    }
}
