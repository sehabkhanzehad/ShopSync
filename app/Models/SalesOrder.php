<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;
    // protected $table = 'sales_orders';
    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(SalesItem::class);
    }

    public function customer()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
