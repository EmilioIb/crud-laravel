<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    //Indicar que no queremos que llene esos campos
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //one to many
    public function produts(){
        return $this->hasMany(Product::class);
    }

    //one to many inverse
    public function category(){
        return $this->belongsTo(Category::class);
    }

    use HasFactory;
}
