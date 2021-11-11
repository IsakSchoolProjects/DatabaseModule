<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Storage;
// use DB;

class ProductsController extends Controller
{
    function list(){
        $res = DB::table('products')->get();

        return view('pages.list')->with('res', $res);
    }
}