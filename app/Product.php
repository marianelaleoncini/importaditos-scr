<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'price', 'stock', 'brand_id'];
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
