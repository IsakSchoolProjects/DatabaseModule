<?php

namespace App\Http\Controllers;

use App\Models\Popularity;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use DB;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' =>['contact', 'showAllProducts']]);
    }

    public function contact(Request $request){

        $name = $request->input('name');
        $email = $request->input('email'); 
        $message = $request->input('message');

        // Security
        $name = stripslashes($name);
        $email = stripslashes($email);
        $message = stripslashes($message);

        $name = htmlspecialchars($name);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);

        $name = strip_tags($name);
        $email = strip_tags($email);
        $message = strip_tags($message);

        DB::table('contact')->insert(
            array(
                'name'   =>   $name,
                'email'   =>   $email,
                'message'   =>   $message
            )
        );

        $data = DB::select(DB::raw("SELECT * FROM products ORDER BY id DESC LIMIT 3"));

        // return DB::table('contact')->get();
        return view('pages.index')->with('data', $data);
    }
    
    function showAllProducts($order){
        // $order_by_views = Popularity::all()->sortByDesc('views');
        // $order = $order_by_views[1]['car_id'];
        if($order == 'no_order'){
            $res = DB::table('products')->get();
        }
        elseif($order == 'popularity'){
            $res = DB::select(DB::raw('SELECT popularity.views, products.* FROM products
            JOIN popularity ON popularity.car_id = products.id
            ORDER BY popularity.views DESC'));
        }
        elseif($order == 'model'){
            $res = DB::select(DB::raw('SELECT * FROM `products` ORDER BY model ASC'));
        }
        elseif($order == 'latest'){
            $res = DB::select(DB::raw('SELECT * FROM `products` ORDER BY id DESC'));
        }
        elseif($order == 'brand'){
            $res = DB::select(DB::raw('SELECT * FROM `products` ORDER BY brand'));
        }
        else{
            $res = DB::table('products')->get();
        }
        
        return view('pages.store')->with('res', $res);
    }

    function showCartItems() {
        $account_id = auth()->user()->id;

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
            $products = DB::select(DB::raw("SELECT products.*, cart.product_id FROM products JOIN cart ON cart.product_id = products.id WHERE account_id = $account_id"));    
        }
        
        $data = array(
            'products'=> $products,
            'cart_products_ids'=> $cart_product_ids,
            'has_cart_items'=> $has_cart_items,
            'cart_products' => sizeof($cart_products)
        );

        return view('pages.cart')->with('data', $data);
    }

}
    
