<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Controllers\Auth;

class CartController extends Controller
{

    public function remove_cart_item($cart_item) {
        $account_id = auth()->user()->id;

        $deleted_item = DB::delete(DB::raw("DELETE FROM cart WHERE id = $cart_item AND account_id = $account_id"));
        if($deleted_item > 0) {
            return back()->with('delete_success', 'You deleted the item.');
        }else {
            return "Cart item not found";
        }
        
    }

    public function remove_all_cart_items() {
        $account_id = auth()->user()->id;

        $deleted_items = DB::delete(DB::raw("DELETE FROM cart WHERE account_id = $account_id"));
        if($deleted_items > 0) {
            return back()->with('delete_success', 'You deleted all items in your cart.');
        }else {
            return back()->with('delete_error', 'No items in cart');
        }
    }

    function add_cart_item($cart_item)
    {
        $account_id = auth()->user()->id;

        $inserted_item = DB::insert(DB::raw("INSERT INTO `cart` (`account_id`, `product_id`) VALUES ($account_id, $cart_item)"));
    
        if($inserted_item > 0) {
            return back()->with('insert_success', 'You added an item to your cart.');
        }else {
            return "Error, item not found.";
        }
    }
}
