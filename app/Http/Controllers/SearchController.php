<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SearchController extends Controller
{
    public function search($term)
    {
        return Product::where('second_name', 'like', "%{$term}%")->orWhere('name', 'like', "%{$term}%")->get();
    }
    public function quickSearch($term)
    {
        return Product::select('id', 'name','second_name')->where('second_name', 'like', "%{$term}%")->orWhere('name', 'like', "%{$term}%")->get();
    }
}
