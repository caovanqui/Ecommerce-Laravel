<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;
    protected $table = 'checkout';
    protected $fillable = [
        'order_id',
        'order_code',
        'phone_number',
        'address',
        'total_amount',
        'status',
        'user_id' // Thêm dòng này
    ];
}
