<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')


@section('content')
<h1 class="text-4xl mx-auto">Cart</h1>

<div class="min-h-screen flex flex-col cartContainer">
    @if (\Session::has('delete_success'))
        <div>{!! \Session::get('delete_success') !!}</div>
    @endif
    <div class="mx-auto flex p-8 w-3/5 border-b border-gray-300 bottomDiv">
        <div class="relative flex-col w-full">
            <div class="flex items-baseline absolute">
                <div class="text-black font-bold text-xl">Total: </div>
                <div class="ml-2 text-black font-semibold" id="totalPriceContainer"></div>
            </div>
            <div class="float-right flex items-center text-center">
                <div class="cursor-pointer text-blue-200 p-2 bg-blue-500 rounded-md">Go to checkout</div>
                <a href="/remove_all_cart_items" class="cursor-pointer ml-2 p-2 bg-red-400 rounded-md">Remove All</a>
            </div>

        </div>
    </div>

</div>

<script>


    let cartContainer = document.querySelector('.cartContainer');

    let products = {!! json_encode($data["products"]) !!};
    let cartProductId = {!! json_encode($data["cart_products_ids"])!!}
    let hasCartItems = {!! json_encode($data["has_cart_items"])!!}

    for(let i = 0; i < products.length; i++) {
        let post = products[i];
        createCartItem(post.brand, post.model, post.color, post.price, post.id, cartProductId[i])
    }

    if(!hasCartItems) {
        let div = document.createElement('div');
        let bottomDiv = document.querySelector('.bottomDiv');

        div.innerHTML = `<div class="mx-auto flex p-8 w-3/5 flex-col">
                            <div class="font-bold text-xl">No items in cart</div>
                            <a href="/store" class="underline text-gray-400">Go to store</a>
                        </div>`
        cartContainer.insertBefore(div, bottomDiv);
    }

    function calculateTotal() {
        let total = 0; 
        for(let i = 0; i < products.length; i++) {
            total += products[i].price;
        }
        return total;
    }
    const priceContainer = document.getElementById('totalPriceContainer')
    priceContainer.textContent = calculateTotal() + " USD"

    function createCartItem(carBrand, carModel, carColor, carPrice, carImage, cartProductId) {

        let bottomDiv = document.querySelector('.bottomDiv');

        let div = document.createElement('div');

        div.innerHTML = `<div class="itemContainer">
                            <div class="mx-auto flex p-8 w-3/5 border-b border-gray-300">
                                <img class="h-32 rounded-xl" src="../media/images/cars/${carImage}_1.jpg">
                                <div class="relative flex-col w-full">
                                    <div class="flex items-baseline">
                                        <div class="ml-8 text-black font-bold text-xl">${carBrand}</div>
                                        <div class="ml-2 text-black font-semibold">${carModel}</div>
                                    </div>
                                    <div class="ml-8 text-gray-400">Color: ${carColor}</div>
                                    <a href="#" class="ml-8 text-gray-400 absolute underline">View all specifications</a>

                                    <div class="ml-8 absolute bottom-0 font-bold text-gray-500 priceDiv">Price: ${carPrice} USD</div>
                                    <a href="/remove_cart_item/${cartProductId}" class="cursor-pointer absolute right-0 bottom-0 p-2 bg-red-400 rounded-md">Remove from cart</a>
                                </div>
                            </div>
                        </div>`;

        cartContainer.insertBefore(div, bottomDiv);
    }
</script>

@endsection