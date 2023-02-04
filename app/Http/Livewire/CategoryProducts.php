<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CategoryProducts extends Component
{
    //definimos la categoria para poder usarla
    public $category;

    public $products = [];

    public function loadPost(){
        $this->products = $this->category->products()->where('status',2)->get();
        $this->emit('glider',$this->category->id);
    }

    public function render()
    {   
        return view('livewire.category-products');
    }
}
