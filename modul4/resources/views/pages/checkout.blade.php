<?php

$_SITE_TITLE = 'Module_4_Database';

?>

@extends('layouts/app')


@section('content')

<div style="background-image: linear-gradient(to right, #ECFCCB, #F7FEE7)" class="border-2 border-gray-100 rounded-md m-auto w-96 p-8">
    <h1 class="text-2xl capitalize pb-2"><i class="fal fa-check mr-4"></i>Purchase completed</h1>
    <hr>
    <div class="pl-2 py-4">
        <p>You will find a digital reciept in your email</p>
        <p>Email: {{Auth::user()->email}}</p>

    </div>
    
    <a class="pl-2 hover:text-gray-400 mb-2" href="/#contact_form_index">Contact us ></a>
    <hr>
</div>

@endsection