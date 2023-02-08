<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'item_name',
        'item_desc',
        'price'
    ];
    // public function items()
    // {
    //     return $this->belongsToMany(Item::class, 'orders', 'user_id', 'item_id');
    // }
}
