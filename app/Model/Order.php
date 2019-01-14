<?php

namespace App\Model;
use App\Model\Rate;
use App\Model\Product;
use App\Model\User;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    public function product()
    {
        return $this->belongsToMany(product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function rate()
    {
        return $this->belongsTo(rate::class);
    }
}
