<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $table = 'customer_purchases';

    protected $fillable = [
        'customer_id',
        'product_id',
        'purchase_quantity',
        'purchase_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Category::class, 'customer_id', 'purchase_id');
    }

    public function product()
    {
        return $this->belongsTo(Category::class, 'product_id', 'purchase_id');
    }
}
