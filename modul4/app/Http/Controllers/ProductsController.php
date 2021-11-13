<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Storage;
use DB;

class ProductsController extends Controller
{

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

        // return DB::table('contact')->get();
        return view('pages.index');
    }

    function list(){
        $res = DB::table('products')->get();

        return view('pages.list')->with('res', $res);
    }

}
    
