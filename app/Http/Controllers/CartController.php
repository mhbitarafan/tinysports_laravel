<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
class CartController extends Controller
{
    public function add_to_cart($id)
    {
        $cart = new Cart;
        $cart_item = array([
            'id' => $id,
            'n' => 1
        ]);
         try {
            $cart->cart_items = json_encode($cart_item);
            $cart->save();
            return "success";
         } catch (Exception $e) {
             return $e->getMessage();
         }
    }
}
