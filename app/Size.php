<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'height', 'weight', 'brand_id'];
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }
}
