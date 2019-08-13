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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function recommended($count = 4)
    {
        $category = $this->categories->first();
        return $this->whereHas('categories', function($query) use($category){
            $query->where('name', $category->name);
        })->where('id', '!=', $this->id)->inRandomOrder()->take($count);
    }

    public function scopeMatchCategory($query, $category)
    {
        return $query->whereHas('categories', function($query) use($category){
            $query->where('slug', $category->slug);
        });
    }

    public function scopeFeatured($query, $count)
    {
        return $query->where('featured', true)->take($count);
    }

    public function scopeSortByPrice($query, $type)
    {
        if($type === 'high_to_low'){
            return $query->orderByDesc('price');
        } elseif ($type === 'low_to_high'){
            return $query->orderBy('price');
        } else {
            return $query;
        }
    }
}
