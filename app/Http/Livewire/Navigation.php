<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Navigation extends Component
{
    public function render()
    {
        //select * from categories
        $categories = Category::all();
        return view('livewire.navigation', compact('categories'));
    }
}
