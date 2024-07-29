<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'product_name',
        'product_quantity',
        'category_id',
        'product_price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'product_id');
    }

    public function purchase()
    {
        return $this->hasMany(Purchase::class);
    }

    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }
}
