<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')

@section('content')

<div class="border-2 border-gray-100 rounded-md m-auto w-96 p-8">
    <h1 class="text-2xl capitalize pb-2">{{ Auth::user()->name }}</h1>
    <hr>
    <div class="hover:bg-gray-50 pl-2 py-4">
        <a class="text-gray-400" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <hr>
</div>


@endsection