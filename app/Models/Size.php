<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'product_id'];

    //one to many inverse
    public function product(){
        return $this->belongsTo(Products::class);
    }

    //many to many
    public function colors(){
        return $this->belongsToMany(Color::class)->withPivot('quantity');
    }

}
