<?php

$_SITE_TITLE = 'Module_4_Database';

?>

@extends('layouts/app')


@section('content')



    <main class="bg-background flex flex-grow px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
        <!-- <div class="bg-container rounded-lg w-full">s</div> -->
    </main>

    <!-- Carousel -->
    <div style="margin:auto;" class="landing-page">
        <div class="carousel">
            <div class="flex flex-row">
                <h1 class="l1carouselText text-4xl font-black text-cyan-700">Volvo XC40</h1>
                {{-- <h1 class="l1carouselText text-4xl font-black text-cyan-700">Volvo XC40</h1> --}}
                <p class="l1carouselTextP text-2xl font-black text-cyan-700">Electric.</p>
                {{-- <p class="l1carouselTextP text-2xl font-black text-cyan-700">Electric.</p> --}}
                <a class="l1carouselLink text-md uppercase" href="#">Learn more ></a>
                {{-- <a class="l1carouselLink text-md" href="#">Learn more ></a> --}}
            </div>
            <img class="rounded-md" src="../media/images/cars/l1.jpg" class="" alt="">
        </div>

        <div>
            <!-- Left -->
            <div class="flex flex-row"><i onclick="prev()" class=" fas fa-chevron-left fa-3x cursor-pointer"></i></div>

            <!-- Right -->
            <div class="flex flex-row-reverse"><i onclick="next()" class="fas fa-chevron-right fa-3x cursor-pointer"></i></div>
        </div>
    </div>

    <br><br>

    <!-- Recently added -->
    <h1 style="text-align: center;" class="text-5xl mb-20">Recently added</h1>

    <div style="" class="flex flex-row gap-10 px-20 pb-20 my-auto recently_added">

        {{-- <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6"> --}}
            {{-- <img src="../media/images/cars/{{$data['id']}}_1.jpg" class="rounded-md" alt=""> --}}
            {{-- <div class="p-6"> --}}
                {{-- <h1 class="text-xl mb-5">{{$data['brand']}} {{$data['model']}} {{$recAdd1}}</h1>
                <p>{{$data['model_year']}} / {{$data['color']}}</p>
                <p class="">Priced at: {{$data['price']}} USD</p> --}}
                {{-- <p>{{$data[0].id}}</p> --}}
                {{-- <br> --}}
                {{-- <a href="/store" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a> --}}
            {{-- </div> --}}
        {{-- </div> --}}

        {{-- <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
            <img src="../media/images/cars/l1.jpg" class="rounded-md" alt="">
            <div class="p-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div>
        <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
            <img src="../media/images/cars/l2.jpg" class="rounded-md" alt="">
            <div class="p-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div>
        <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
            <img src="../media/images/cars/l3.jpg" class="rounded-md" alt="">
            <div class="p-3 mb-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div> --}}
    </div>

    <br><hr><br>

    {{-- Contact --}}

    <div class="border-2 border-highlight w-6/12 m-auto rounded-md center mt-16">

    <a id="contact_form_index"></a>

    {{-- composer require laravelcollective/html --}}

        {{-- <form class="p-12" action=""> --}}
        {{Form::open(array('action' => 'App\Http\Controllers\ProductsController@contact', 'method' => 'get', 'class' => 'p-12'))}}

            <h1 class="text-4xl pb-10">Contact Us</h1><br>

            {{-- <input class="mr-4 p-2 border-2 w-44" minlenth="2" maxlength="64" required type="text" placeholder="name..."> --}}
            {{Form::text('name', '', ['class' => 'mr-4 p-2 border-2 w-44', 'minlength' => '2', 'maxlength' => '64', 'type' => 'text', 'placeholder' => 'name...'])}}
            {{Form::text('email', '', ['class' => 'ml-2 p-2 border-2 w-44', 'minlength' => '1', 'maxlength' => '64', 'type' => 'email', 'placeholder' => 'email...'])}}
            {{-- <input class="ml-2 p-2 border-2 w-44" minlength="1" maxlength="64" required type="email" placeholder="email...">--}}
            <br><br> 

            {{Form::textarea('message', '', ['onkeyup' => 'textareaKeyDown()', 'onkeydown' => 'textareaKeyDown()', 'required' => '', 'id' => 'textarea', 'class' => 'w-96 p-2 border-2', 'minlength' => '10', 'maxlength' => '2064', 'name' => 'message', 'cols' => '30', 'rows' => '5', 'placeholder' => 'message...'])}}
            {{-- <textarea onkeyup="textareaKeyDown()" onkeydown="textareaKeyDown()" required id="textarea" class="w-96 p-2 border-2" minlength="10" maxlength="2064" name="msg" cols="30" rows="5" placeholder="message..."></textarea> --}}
            <br><span class="q">0</span>
            <span>/2064</span><br><br>

            {{Form::submit('Send', ['type' => 'submit', 'class' => 'bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600'])}}
            {{-- <input href="" type="submit" value="Send" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600"> --}}

        {{ Form::close() }}
        {{-- </form> --}}
    </div><br><br><br>



    <script>

        let products = {!! json_encode($data) !!};
         console.log(products[0]['id']);

        let recAdd = document.querySelector('.recently_added');

            for(let i = 0; i < products.length; i++){
                console.log(i);
                
                recAdd.innerHTML += `
                <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
                    <img src="../media/images/cars/${products[i]['id']}_1.jpg" class="rounded-md" alt="">
                    <div class="p-6">
                        <h1 class="text-xl mb-5">${products[i]['brand']} ${products[i]['model']}</h1>
                        <p>${products[i]['model_year']} / <span class="capitalize">${products[i]['fuel']}</span> / ${products[i]['color']}</p>
                        <p class="text-gray-400">Priced at: ${products[i]['price']} USD</p>
                        <p></p>
                        <br>
                        <a href="/store" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
                    </div>   
                </div> `;

            }
        // });

        // window.addEventListener('load', (event) => {
        //     let recently = document.querySelector('.recently_added');

        //     for(let i = 0; i < 3; i++){
        //         recently.innerHTML += `
        //         <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
        //             <img src="../media/images/cars/l1.jpg" class="rounded-md" alt="">
        //             <div class="p-3">
        //                 <h1 class="text-xl mb-5"></h1>
        //                 <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
        //                 <br>
        //                 <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
        //             </div>
            
        //         </div>`;
        //     }
        // });

        // Textarea Counter
        let textarea = document.querySelector('#textarea');
        let qLetters = document.querySelector('.q');

        function textareaKeyDown(){
            qLetters.innerHTML = textarea.value.length;
        }

        // Carousel
        let img = 1;
        let max = 4;
        let min = 0;
        
        function image(){
            let carousel = document.querySelector('.carousel');
            if(img == 1){
                carousel.innerHTML = `<div class="flex flex-row">
                <h1 class="l1carouselText text-4xl font-black text-cyan-700">Volvo XC40</h1>
                <p class="l1carouselTextP text-2xl font-black text-cyan-700">Electric.</p>
                <a class="l1carouselLink text-md uppercase" href="#">Learn more ></a>
                </div>
                <img class="rounded-md" src="../media/images/cars/l1.jpg" class="" alt="">`;

                document.querySelector('.fa-chevron-right').style.color = '#BFDBFE';
                document.querySelector('.fa-chevron-left').style.color = '#BFDBFE';

                return;
            }
            if(img == 2){
                carousel.innerHTML = `<div class="flex flex-row-reverse">
                <h1 class="l2carouselText text-4xl font-black text-cyan-700">Volvo S60</h1>
                <p class="l2carouselTextP text-2xl font-black text-cyan-700">The car of the year</p>
                <a class="l2carouselLink text-md text-orange-50" href="#">Learn more ></a>
                </div>
                <img class="rounded-md" src="../media/images/cars/l2.jpg" class="" alt="">`;

                document.querySelector('.fa-chevron-right').style.color = '#FEE2E2';
                document.querySelector('.fa-chevron-left').style.color = '#FEE2E2';

                return;
            }
            if(img == 3){
                carousel.innerHTML = `<img class="rounded-md" src="../media/images/cars/l3.jpg" class="" alt="">`;

                document.querySelector('.fa-chevron-right').style.color = '#71717A';
                document.querySelector('.fa-chevron-left').style.color = '#71717A';

                return;
            }

        }
        function next(){
            img++;
            if(img == max){
                img = min+1;
            }
            image();
        }

        function prev(){
            img--;
            if(img == min){
                img = max-1;
            }
            image();
        }

    </script>

@endsection