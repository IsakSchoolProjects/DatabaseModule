<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Storage;
// use DB;

class ProductsController extends Controller
{
    function showAllProducts(){
        $res = DB::table('products')->get();

        return view('pages.store')->with('res', $res);
    }

    function showCartItems() {
        $account_id = 1;

        $cart_products = DB::select(DB::raw("SELECT id, product_id FROM cart WHERE account_id = $account_id"));

        $has_cart_items = sizeof($cart_products) > 0;

        $cart_product_res = [];
        $cart_product_ids = [];

        for ($x = 0; $x < sizeof($cart_products); $x++) {
            array_push($cart_product_res, $cart_products[$x]->product_id);
            array_push($cart_product_ids, $cart_products[$x]->id);
        }    

        $products = [];

        if(sizeof($cart_products) > 0) {
            $stringified_cart_product_res = substr(json_encode($cart_product_res), 1, -1);

            $products = DB::select(DB::raw("SELECT * FROM products WHERE id IN ($stringified_cart_product_res)"));    
        }
        
        $data = array(
            'products'=> $products,
            'cart_products_ids'=> $cart_product_ids,
            'has_cart_items'=> $has_cart_items
        );

        return view('pages.cart')->with('data', $data);
    }
}