<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')


@section('content')
<h1 class="text-4xl mx-auto">Cart</h1>

<div class="min-h-screen flex flex-col cartContainer">

    <div class="mx-auto flex p-8 w-3/5 border-b border-gray-300 bottomDiv">
        <div class="relative flex-col w-full">
            <div class="flex items-baseline absolute">
                <div class="text-black font-bold text-xl">Total: </div>
                <div class="ml-2 text-black font-semibold totalPriceContainer"></div>
            </div>
            <div class="float-right flex items-center text-center">
                <div class="cursor-pointer text-blue-200 p-2 bg-blue-500 rounded-md">Go to checkout</div>
                <div class="cursor-pointer ml-2 p-2 bg-red-400 rounded-md" onclick="removeAllFromCart()">Remove All</div>
            </div>

        </div>
    </div>

</div>

<script>
    let cartContainer = document.querySelector('.cartContainer');

    createCartItem("Volvo", "XC90", "Frost White", 58000, "1_1")
    createCartItem("Volvo", "XC40", "Frost White", 45000, "4_1")


    console.log(cartContainer.children.length-1)
    for(let i = 0; i < cartContainer.children.length-1; i++) {
        let priceDiv = document.getElementsByClassName('priceDiv')[i].textContent;
        let price = priceDiv.replace(/[^0-9]/g, '')

        let total = 0;
        total += price;
        console.log(total)
    }
    
    function createCartItem(carBrand, carModel, carColor, carPrice, carImage) {

        let bottomDiv = document.querySelector('.bottomDiv');
        
        let div = document.createElement('div');
        
        div.innerHTML = `<div class="itemContainer">
                            <div class="mx-auto flex p-8 w-3/5 border-b border-gray-300">
                                <img class="h-32 rounded-xl" src="../media/images/cars/${carImage}.jpg">
                                <div class="relative flex-col w-full">
                                    <div class="flex items-baseline">
                                        <div class="ml-8 text-black font-bold text-xl">${carBrand}</div>
                                        <div class="ml-2 text-black font-semibold">${carModel}</div>
                                    </div>
                                    <div class="ml-8 text-gray-400">Color: ${carColor}</div>
                                    <a href="#" class="ml-8 text-gray-400 absolute underline">View all specifications</a>

                                    <div class="ml-8 absolute bottom-0 font-bold text-gray-500 priceDiv">Price: ${carPrice} USD</div>
                                    <div class="cursor-pointer absolute right-0 bottom-0 p-2 bg-red-400 rounded-md" onclick="removeFromCart()">Remove from cart</div>
                                </div>
                            </div>
                        </div>`;

        cartContainer.insertBefore(div, bottomDiv);
    }

    function removeFromCart() {
        let itemContainer = document.querySelector('.itemContainer');
    }

    function removeAllFromCart() {
        for(let i = 0; i < cartContainer.children.length-1; i++) {
            let container = document.querySelector('.itemContainer');
            container.remove()
        }
    }
</script>

@endsection