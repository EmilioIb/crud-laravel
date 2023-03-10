<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;
use App\Models\Product;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //obtenemos los productos con color y talla
        $products = Product::whereHas('subcategory', function(Builder $query){
            $query->where('color',true)
            ->where('size',true);
        })->get();

        $sizes = ['Size S', 'Size M', 'Size L'];

        foreach($products as $product){
            foreach($sizes as $size){
                $product->size()->create([
                    'name' => $size
                ]);
            }
        }
    }
}
