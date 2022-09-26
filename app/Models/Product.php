<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    use HasFactory;
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'id');
    }

    public function order_product()
    {
        return $this-> hasMany(Order_Product::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}
