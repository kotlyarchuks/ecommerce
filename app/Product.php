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

    public function presentPrice()
    {
        return '$'. number_format($this->price / 100, 2);
    }
}
