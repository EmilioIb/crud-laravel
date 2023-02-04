<?php

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Borra la carpeta categories 
        Storage::deleteDirectory('/public/categories');
        //Crea la carpeta categories
        Storage::makeDirectory('/public/categories');

        //Borra la carpeta subcategories 
        Storage::deleteDirectory('/public/subcategories');
        //Crea la carpeta products
        Storage::makeDirectory('/public/subcategories');

        //Borra la carpeta products 
        Storage::deleteDirectory('/public/products');
        //Crea la carpeta products
        Storage::makeDirectory('/public/products');

        //Manda a llamar al seeder de usuarios, category, subcategory, product, productcolor, color
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ColorSizeSeeder::class);

    }
}
