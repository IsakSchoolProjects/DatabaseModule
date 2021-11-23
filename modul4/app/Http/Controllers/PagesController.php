<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Models\Recadd;
use App\Models\Popularity;
use App\Models\orders;
use App\Models\cart;

use Illuminate\Support\Facades\Storage;
use DB;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'about', 'store', 'login', 'register', 'car']]);
    }

    public function index(){

        // RECENTLY ADDED SECTION
        // SELECT * FROM products ORDER BY id DESC LIMIT 3

        // for($i = 0; $i > 3; $i++){
            // $recAdd1 = DB::table('products')->select('id')->orderByRaw('id DESC')->skip(0)->take(1)->get();
            // $recAdd1 = print_r($recAdd1);
            // $array = $recAdd1->toArray();
            // $recAdd2 = DB::table('products')->select('id')->orderByRaw('id DESC')->skip(1)->take(1)->get();
            // $recAdd3 = DB::table('products')->select('id')->orderByRaw('id DESC')->skip(2)->take(1)->get();
            $data = DB::select(DB::raw("SELECT * FROM products ORDER BY id DESC LIMIT 3"));
            // $recAdd1.lenght();
            // $recAdd1 = Recadd::find('model');
            // $data = Recadd::find(2);
            // $data = Recadd::skip(3)->take(3)->get();
            // $recAdd3 = Recadd::find(3);
            // $brand = DB::table('products')->select('brand')->where('id', '2')->first();

            // $data = array(
            //     'recAdd1'=> $recAdd1,
            //     'recAdd2'=> $recAdd2,
            //     'recAdd3'=> $recAdd3
            // );
            return view('pages.index')->with('data', $data);
        // }

    }

    public function about(){
        return view('pages.about');
    }

    public function store(){
        return view('pages.store');
    }

    public function login(){
        return view('pages.login');
    }

    public function register(){
        return view('pages.register');
    }

    // public function cart() {
    
    //     return view('pages.cart');
    // }

    public function checkout(){
        $account_id = auth()->user()->id;

        $cart_items = DB::select(DB::raw("SELECT product_id FROM cart WHERE account_id = $account_id"));

        $product_ids = [];

        // echo print_r($cart_items);

        // return;

        for ($i=0; $i < sizeof($cart_items); $i++) { 
            array_push($product_ids, $cart_items[$i]->product_id);
        }

        if(sizeof($cart_items) > 0) {
            $inserted_items = DB::insert(DB::raw("INSERT INTO `orders` (`product_ids`, `user_id`) VALUES ('". substr(json_encode($product_ids), 1, -1) ."', $account_id)"));
            return redirect('/remove_all_cart_items')->with('checkout', true);
        } else {
            return view('pages.checkout');
        }
    }

    public function settings(){
        return view('pages.settings');
    }

    public function empty(){
        return view('pages.empty');
    }

    public function profile_picture(){
        return view('pages.profile_picture');
    }

    public function upload(Request $request){
        $account_id = auth()->user()->id;

        $profile_image = auth()->user()->profile;

        // return $request->input('profile');
        
        $this->validate($request, [
            'profile' => 'image|nullable|max:1999'
        ]);

        if($request->hasFile('profile')){
            
            // Get filename with the extension
            $filenameWithExt = $request->file('profile')->getClientOriginalName();
            
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get just ext
            $extension = $request->file('profile')->getClientOriginalExtension();

            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
            $path = $request->file('profile')->storeAs('public/profile_images', $filenameToStore);
        }
        else{
            $filenameToStore = 'noImage.png';
        }

        // $test = DB::update('UPDATE users SET `profile` = 100 WHERE id = 2');

        DB::update('update users set profile = ? where id = ?', [$filenameToStore, $account_id]);

        return redirect('/settings');
    }

    public function car($id){
        
        // Updates views
        $table = Popularity::find($id);
        $views = $table['views'];
        $views = $views + 1;
        $popularity = DB::select(DB::raw("UPDATE `popularity` SET `views` = '$views' WHERE `popularity`.`id` = $id"));

        $data = Recadd::find($id);

        return view('pages/car')->with('data', $data);
    }
}