<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')

@section('content')

<div class="border-2 border-gray-100 rounded-md m-auto w-96 p-8">
    <h1 class="text-2xl capitalize pb-2">{{ Auth::user()->name }}</h1>
    <hr>
    <div class="hover:bg-gray-50 pl-2 py-4">
        {{Form::open(['action' => '#', 'method' => 'GET'])}}
            {{Form::file('cover_image')}}<a class="text-gray-400" href="/profile_picture">Profile Picture</a>
        {{Form::close()}}
    </div>
    <hr>
</div>

@endsection