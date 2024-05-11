<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "category";
    protected $primaryKey = "category_id";


    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }

    public function parentcategory(){
        return $this->hasOne(Category::class, 'category_id', 'parent_id')->select('category_id', 'CategoryName', 'url')->where('status', 1);
    }


    public function subcategories(){
        return $this->hasMany(Category::class, 'parent_id')->where('status',1);
    }

    public static function getCategories(){
        $getCategories = Category::with(['subcategories'=>function($query){$query->with('subcategories');}])->where('parent_id',0)->where('status',1)->get()->toArray();
        return $getCategories;
    }

    public function categoryImages()
    {
        return $this->hasMany(Images::class, 'category_id');
    }

}
