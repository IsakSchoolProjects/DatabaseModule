<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
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
}