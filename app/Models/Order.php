<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $guarded = [];

    protected $hidden = [
        'deleted_at',
        'updated_at',
        'user_id',
        'product_id'
    ];

    protected $casts = [
        'is_checked_out' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo('users');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
