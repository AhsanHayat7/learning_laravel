<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = "customers";
    protected $primaryKey = "customer_id";

    // Method to transform customer data
    public static function transformData($customers)
    {
        return $customers->map(function ($customer) {
            return [
                'customer_id' => $customer->customer_id,
                'name' => $customer->name,
                'email' => $customer->email,
                'gender' => $customer->gender,
                'address' => $customer->address,
                'state' => $customer->state,
                'country' => $customer->country,
                // Add more fields as needed
            ];
        });
    }
}
