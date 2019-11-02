<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $hidden = ['pivot'];

    public function products()
    {
        return $this->belongsToMany('App\Product', 'category_product', 'category_id', 'product_id');
    }

    public function parent()
    {
        return $this->belongsTo('Category', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('Category', 'parent_id');
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }
}
