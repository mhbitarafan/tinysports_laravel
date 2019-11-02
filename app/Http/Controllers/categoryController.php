<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\category_product;

class categoryController extends Controller
{
    public function list()
    {
        return Category::all();
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $category = new Category();
            $category->name = $request->name;
            $category->slug = $request->slug;
            if ($request->parent_id) {
                $pid = Category::where('name', '=', $request->parent_id)->value('id');
                $category->parent_id = $pid;
            }
            $category->save();
            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/laravel/api/category/create");
            die;
        } elseif ($request->isMethod('get')) {
            $categories = Category::all()->pluck('name');
            return view('category', ["categories" => json_encode($categories, JSON_UNESCAPED_UNICODE)]);
        }
    }

    public function setCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $selected_products = $request->products;
            $selected_products = explode(',', $selected_products);
            $cid = Category::where('name', '=', $request->cat)->value('id');
            foreach ($selected_products as $key => $value) {
                $category_product = new category_product();
                $pid = $value;
                $category_product->category_id = $cid;
                $category_product->product_id = $pid;
                $category_product->save();
            }
            header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/laravel/api/product/set_category");
            die;
        } elseif ($request->isMethod('get')) {
            $already_have_cat = category_product::all()->pluck('product_id');
            $products = Product::select("name", "id")->whereNotIn('id', $already_have_cat)->paginate(50);
            $categories = Category::all()->pluck('name');
            return view('change-category', ["products" => json_encode($products, JSON_UNESCAPED_UNICODE), "categories" => json_encode($categories, JSON_UNESCAPED_UNICODE)]);
        }
    }
}
