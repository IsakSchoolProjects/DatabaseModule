<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')

@section('content')

<div class="border-2 border-gray-100 rounded-md m-auto w-96 p-8">
    <h1 class="text-2xl capitalize pb-2">{{ Auth::user()->name }}</h1>
    <hr>
    <div class="hover:bg-gray-50 pl-2 py-4">
        {{-- {!!Form::open(['action' => 'App\Http\Controllers\ProductsController@profile', 'method' => 'get', 'enctype' => 'multipart/form-data'])!!} --}}
        {!!Form::open(['action' => 'App\Http\Controllers\PagesController@upload', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        @csrf
        {{-- OLD --}}
            {{-- {{Form::file('profile')}}  --}}
            <br><br>
            {{Form::text('url', '', ['class' => 'mr-4 p-2 border-2 w-44', 'minlength' => '2', 'maxlength' => '64', 'type' => 'text', 'placeholder' => 'url...'])}}
            {{Form::submit('Load', ['class' => 'bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600'])}}
        {!!Form::close()!!}
    </div>
    <hr>
</div>

@endsection