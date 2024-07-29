<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    protected $table = 'supplier_deliveries';

    protected $fillable = [
        'supplier_id',
        'product_id',
        'delivery_quantity',
        'delivery_date',
    ];

    public function supplier()
    {
        return $this->belongsTo(Category::class, 'supplier_id', 'delivery_id');
    }

    public function product()
    {
        return $this->belongsTo(Category::class, 'product_id', 'delivery_id');
    }
}
