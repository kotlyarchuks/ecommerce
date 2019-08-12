<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    public function presentPrice($count = 1)
    {
        return '$'. number_format(($this->price * $count) / 100, 2);
    }

    public function scopeRecommended($query, $count = 4)
    {
        return $query->inRandomOrder()->take($count);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function scopeMatchCategory($query, $category)
    {
        return $query->whereHas('categories', function($query) use($category){
            $query->where('slug', $category->slug);
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
}
