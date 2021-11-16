<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')


@section('content')


@if (\Session::has('insert_success'))
        <div style="background-image: linear-gradient(to right, #ECFCCB, #F7FEE7)" class="h-12 bg-lime-100 w-2/3 mx-auto mt-4 rounded-md mb-4">
            <p class="m-3"><i class="fal fa-check mr-4"></i>{!! \Session::get('insert_success') !!}</p>
        </div>
@endif

<div id="products" class="flex flex-row flex-wrap gap-4 mx-12">

</div>

<script>
    let res = {!! $res !!};

    console.log(res);
    let productsEl = document.getElementById('products');

    for(let i = 0; i < res.length; i++) {
        let post = res[i];
        
        productsEl.innerHTML +=`
            <div id="${post.id}" class="bg-gray-700 p-6 w-80 m-auto rounded-3xl">
                <img src="../media/images/cars/${post.id}_1.jpg" class="rounded-xl h-40 drop-shadow"></img>
                <div class="text-gray-400 text-sm pt-4">${post.model_year} / 890 mil / ${post.color}</div>
                <div class="text-gray-300 font-bold">${post.brand} ${post.model}</div>
                <div class="text-gray-300 text-sm font-semibold">Priced at: ${post.price} USD</div>
                <div class="text-sm flex justify-between place-items-center border-t border-gray-500 pt-2">
                <div class="cursor-pointer text-center pt-1 text-gray-400 font-semibold underline hover:text-gray-500">Learn more</div>
                <a href="/add_cart_item/${post.id}" class="cursor-pointer font-semibold text-center bg-blue-400 rounded-md p-1 drop-shadow text-gray-700 hover:bg-blue-500 hover:text-gray-800">Add to cart</a>
                </div>
            </div>`
    }
</script>

<style>
    img {
        
    }
    div img{
        object-fit: cover;
        width: 100%;
        height: 100%;
    }
</style>

<br><br><br>

@endsection