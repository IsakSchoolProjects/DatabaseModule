<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;

class ProductsController extends Controller
{
    function list(){
        return DB::table('products')->get();
    }
}
