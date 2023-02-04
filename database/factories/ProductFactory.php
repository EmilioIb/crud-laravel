<?php

namespace Database\Factories;

use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //esta funcion creara una oracion de 2 palabras para el nombre
        $name = $this->faker->sentence(2);
    
        //asigna el producto a una subcategoria al azar
        $subcategory = Subcategory::all()->random();
    
        //recuperamos la categoria de la subcategoria seleccionada
        $category = $subcategory->category;
    
        //asocia la marca con la categoria
        $brands = $category->brands->random();
    
        //si la subcategoria no tiene color, la cantidad sera NULL, sino sera 15
        if($subcategory->color){
            $quantity = null;
        }
        else{
            $quantity = 15;
        }
    
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99,49.99,99.99]),
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brands->id,
            'quantity' => $quantity,
            'status'=>2,
        ];
    }
}
