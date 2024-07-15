<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = "wishlist";
    protected $primaryKey = "id";

    protected $fillable = [
        'user_id', // Add user_id to the fillable array
        'product_id',
    ];

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'Customer_id');
    }

    public function isInWishlist()
    {
        // Assuming you have a user_id column in the Wishlist table
        $userId = auth()->id();

        // Check if the product is in the wishlist for the current user
        return Wishlist::where('user_id', $userId)
                       ->where('product_id', $this->product_id)
                       ->exists();
    }
}
