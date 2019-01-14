<?php

namespace App\Model;
use App\Model\Order;
use App\Model\Rate;
use App\Model\Comment;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'content',      
    ];
    
    public function order()
    {
        return $this->belongsToMany(order::class);
    }

    public function comment()
    {
    	return $this->hasMany(Comment::class);
    }

    public function rate()
    {
    	return $this->hasMany(rate::class);
    }    

}
