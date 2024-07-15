<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Images extends Model
{
    use HasFactory;
    protected $table = "productsimages";
    protected $primaryKey = "id";

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'Customer_id');
    }
}
