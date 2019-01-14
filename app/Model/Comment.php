<?php

namespace App\Model;
use App\Model\Product;
use App\Model\User;


use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'content',
        'product_id',
        'user_id',
        
    ];

    public function product()
    {
        return $this->belongsTo(product::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
