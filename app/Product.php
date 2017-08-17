<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'price'
    ];

    public function media(){
    	return $this->belongsToMany(media::class)->where('type','image');
    }
}
