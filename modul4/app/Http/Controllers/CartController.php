<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function remove_cart_item($cart_item) {
        $account_id = 1;

        $deleted_item = DB::delete(DB::raw("DELETE FROM cart WHERE id = $cart_item AND account_id = $account_id"));
        if($deleted_item > 0) {
            return back()->with('delete_success', 'You deleted the item.');
        }else {
            return "Cart item not found";
        }
        
    }
    public function remove_all_cart_items() {
        $account_id = 1;

        $deleted_items = DB::delete(DB::raw("DELETE FROM cart WHERE account_id = $account_id"));
        if($deleted_items > 0) {
            return back()->with('delete_success', 'You deleted all items in your cart.');
        }else {
            return "No items in cart";
        }
    }
}
