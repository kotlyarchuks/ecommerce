<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected static function boot()
    {
        parent::boot();

        self::creating(function($product){
            $product->slug = Str::slug($product->title);
        });
    }

    public function presentPrice($count = 1)
    {
        return '$'. number_format(($this->price * $count) / 100, 2);
    }

    public function scopeRecommended($query, $count = 4)
    {
        return $query->inRandomOrder()->take($count);
    }
}
