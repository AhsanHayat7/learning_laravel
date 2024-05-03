<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Products extends Model
{
    use HasFactory;

    protected $table = "products";
    protected $primaryKey = "Customer_id";


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->SKU = Str::random(8); // Generate a random SKU of length 8
        });
    }



    public function images()
    {
        return $this->hasMany(Images::class, 'product_id', 'Customer_id');
    }


    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}




