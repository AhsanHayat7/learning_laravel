<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public function members()
    {
        return $this->hasMany(Member::class,'customer_id');
    }
}
