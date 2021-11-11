<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')


@section('content')

<div>
    <h1 class="text-4xl center mb-8 mt-8">About Us</h1>
    <p class="text-md center w-96 mx-auto">We are a group of three, with an assignment to create an application with a database. 
        Our idea is to create an application that sells cars.</p>
</div>

<script>
    let res = {!! $res !!};

    console.log(res);
</script>

<br><br><br>

@endsection