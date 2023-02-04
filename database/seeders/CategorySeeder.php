<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;



class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            ['name' => 'Cell phones and tables',
            'slug' => Str::slug('Cell phones and tables'),
            'icon' => '<i class="fa fa-mobile-screen-button"></i>'],

            ['name' => 'TV, audio and video',
            'slug' => Str::slug('TV, audio and video'),
            'icon' => '<i class="fa fa-tv"></i>'],

            ['name' => 'Consoles and video games',
            'slug' => Str::slug('Consoles and video games'),
            'icon' => '<i class="fa fa-gamepad"></i>'],

            ['name' => 'Computing',
            'slug' => Str::slug('Computing'),
            'icon' => '<i class="fa fa-computer"></i>'],

            ['name' => 'Fashion',
            'slug' => Str::slug('Fashion'),
            'icon' => '<i class="fa fa-tshirt"></i>'],
        ];

        foreach($categories as $category){
            //guardamos el contenido del faker en la variable
            $category = Category::factory(1)->create($category)->first();

            //Creara 4 marcas para cada categoria
            $brands = Brand::factory(4)->create();

            //Por cada marca creada la relacionaremos con el id de la categoria
            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
