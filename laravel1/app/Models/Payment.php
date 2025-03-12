<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['payment_date','payment_method', 'amount', 'order_id', 'customer_id'];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}