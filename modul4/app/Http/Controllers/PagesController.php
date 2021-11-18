<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
// use App\Models\User;
use App\Models\Recadd;
use App\Models\Popularity;

use Illuminate\Support\Facades\Storage;
use DB;

class PagesController extends Controller
{
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

    public function cart() {
        return view('pages.cart');
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