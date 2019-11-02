<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getCategoriesAttribute()
    {
        return $this->categories()->pluck('name')->toArray();
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_product', 'product_id', 'category_id');
    }

    protected $hidden = ['pivot'];
    protected $appends = ['categories'];
}
