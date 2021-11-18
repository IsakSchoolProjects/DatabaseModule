<?php

$_SITE_TITLE = 'Module_4_Database';

?>

@extends('layouts/app')


@section('content')

@if (\Session::has('insert_success'))
        <div style="background-image: linear-gradient(to right, #ECFCCB, #F7FEE7)" class="h-12 bg-lime-100 w-2/3 mx-auto mt-4 rounded-md mb-4">
            <p class="m-3"><i class="fal fa-check mr-4"></i>{!! \Session::get('insert_success') !!}</p>
        </div>
@endif

<div class="bg-gray-100 w-4/5 mx-auto mb-8 p-8 rounded-xl">
    <!-- Carousel -->
    <div style="margin:auto;" class="img1">
        <div class="carousel">
            <div class="rounded-md" style=" height: 400px; background-size: cover; background-image: url(../media/images/cars/{{$data['id']}}_1.jpg); background-repeat: no-repeat; background-position: center;"></div>
        </div>

        <div>
            <!-- Left -->
            <div class="flex flex-row"><i onclick="prev()" class="car-left fas fa-chevron-left fa-3x cursor-pointer"></i></div>

            <!-- Right -->
            <div class="flex flex-row-reverse"><i onclick="next()" class="car-right fas fa-chevron-right fa-3x cursor-pointer"></i></div>
        </div>
    </div>

    <div style="margin:auto; display: none;" class="img2">
        <div class="carousel">
            <div class="rounded-md" style="height: 400px; background-size: cover; background-image: url(../media/images/cars/{{$data['id']}}_2.jpg); background-repeat: no-repeat; background-position: center;"></div>
        </div>

        <div>
            <!-- Left -->
            <div class="flex flex-row"><i onclick="prev()" class="car-left fas fa-chevron-left fa-3x cursor-pointer"></i></div>

            <!-- Right -->
            <div class="flex flex-row-reverse"><i onclick="next()" class="car-right fas fa-chevron-right fa-3x cursor-pointer"></i></div>
        </div>
    </div>

    <div style="margin:auto; display: none;" class="img3">
        <div class="carousel">
            <div class="rounded-md" style="height: 400px; background-size: cover; background-image: url(../media/images/cars/{{$data['id']}}_3.jpg); background-repeat: no-repeat; background-position: center;"></div>
        </div>

        <div>
            <!-- Left -->
            <div class="flex flex-row"><i onclick="prev()" class="car-left fas fa-chevron-left fa-3x cursor-pointer"></i></div>

            <!-- Right -->
            <div class="flex flex-row-reverse"><i onclick="next()" class="car-right fas fa-chevron-right fa-3x cursor-pointer"></i></div>
        </div>
    </div>

    <br><br>

    <h1 class="text-4xl font-bold">{{$data['brand']}} {{$data['model']}}</h1>
    <!-- Brand, modell -->
    <span>{{$data['drive_type']}} • {{$data['gearbox']}} • {{$data['model_year']}}</span>
    <!-- Drive_tye, gearbox, model year -->
  
    <br /><br /><br />
  
    <h1 class="text-3xl">{{$data['price']}} USD</h1>
    <!-- Price -->
  <br>

  <a href="/add_cart_item/{{$data['id']}}" class="cursor-pointer font-semibold text-center bg-blue-400 rounded-md p-2 drop-shadow text-gray-700 hover:bg-blue-500 hover:text-gray-800">Add to cart</a>

  <br><br>
  
  <div class="flex flex-col">

     {{-- Spec --}}
    <h1 class="text-2xl font-bold">Spec</h1>

    <div class="flex spec my-4 mx-4">
        <div class="w-48">
            <p class="font-bold">Brand</p>
            <p class="">{{$data['brand']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Model</p>
            <p class="">{{$data['model']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Model Year</p>
            <p class="">{{$data['model_year']}}</p>
        </div>
    </div>

    <div class="flex mx-4">
        <div class="w-48">
            <p class="font-bold">Cartype</p>
            <p class="">{{$data['car_type']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Seats</p>
            <p class="">{{$data['seats']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Doors</p>
            <p class="">{{$data['doors']}}</p>
        </div>
    </div>
  
    <div class="flex m-4">
        <div class="w-48">
            <p class="font-bold">Color</p>
            <p class="">{{$data['color']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Drive type</p>
            <p class="">{{$data['drive_type']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Gearbox</p>
            <p class="">{{$data['gearbox']}}</p>
        </div>
    </div>

    {{-- Engine Specs --}}
    <h1 class="font-bold text-2xl my-8">Engine Specs</h1>
  
    <div class="flex my-4 mx-4">
        @if($data['fuel'] !== 'electric')
            <div class="w-48">
                <p class="font-bold">Cylinders</p>
                <p class="">{{$data['cylinders']}}</p>
            </div>
        @endif
        <div class="w-48">
            <p class="font-bold">Horsepower</p>
            <p class="">{{$data['hp']}} HP</p>
        </div>
        @if($data['fuel'] !== 'electric' && $data['fuel'] !== 'hybrid')
            <div class="w-48">
                <p class="font-bold">Distance/Range</p>
                <p class="">{{$data['distance']}} km</p>
            </div>
        @endif
    </div>
  
    <div class="flex mx-4">
      <div class="w-48">
        <p class="font-bold">Fuel</p>
        <p class="">{{$data['fuel']}}</p>
      </div>
      @if($data['fuel'] !== 'electric')
        <div class="w-48">
            <p class="font-bold">Fuel Capacity</p>
            <p class="capitalize">{{$data['fuel_capacity']}} L</p>
        </div>
      @endif
      <div class="w-48">
          {{-- Electric --}}
        @if($data['fuel'] == 'electric')
            <p class="font-bold">Fuel Economy</p>
            <p class="">{{$data['fuel_economy']}}</p>
        @endif
        {{-- Not Electric --}}
        @if($data['fuel'] == 'gasoline' || $data['fuel'] == 'diesel')
            <p class="font-bold">Fuel Economy</p>
            <p class="">{{$data['fuel_economy']}} l/10km</p>
        @endif
        {{-- Hybrid --}}
        @if($data['fuel'] == 'hybrid')
            <p class="font-bold">Fuel Economy</p>
            <p class="">{{$data['fuel_economy_mixed']}}</p>
            <p class="">{{$data['fuel_economy_electric']}}</p>
        @endif
        
      </div>
    </div>
  
  
    {{-- Performance specs --}}
    <h1 class="font-bold text-2xl my-8">Performance Specs</h1>
  
    <div class="flex my-4 mx-4">
      <div class="w-48">
        <p class="font-bold">Top speed</p>
        <p class="">{{$data['top_speed']}} kph</p>
      </div>
      <div class="w-48">
        <p class="font-bold">Acceleration (0-100 kph)</p>
        <p class="">{{$data['acceleration']}} s</p>
      </div>
    </div>

    {{-- Transmission Specs --}}
    <h1 class="font-bold text-2xl my-8">Transmission Specs</h1>
  
    <div class="flex my-4 mx-4">
      <div class="w-48">
        <p class="font-bold">Tire size</p>
        <p class="">{{$data['tire_size']}}</p>
      </div>
    </div>
  
    {{-- Battery --}}
    @if($data['fuel'] == 'electric' || $data['fuel'] == 'hybrid')
        <h1 class="font-bold text-2xl my-8">Battery</h1>
    
        <div class="flex my-4 mx-4">
        <div class="w-48">
            <p class="font-bold">Charging time</p>
            <p class="">{{$data['charging_time']}}</p>
        </div>
        <div class="w-48">
            <p class="font-bold">Distance/Range</p>
            <p class="">{{$data['electric_distance']}} km</p>
        </div>
        </div>
    @endif

    {{-- Dimensions --}}
    <h1 class="font-bold text-2xl my-8">Dimensions</h1>
  
    <div class="flex my-4 mx-4">
      <div class="w-48">
        <p class="font-bold">Width</p>
        <p class="">{{$data['width']}} mm</p>
      </div>
      <div class="w-48">
        <p class="font-bold">Height</p>
        <p class="">{{$data['height']}} mm</p>
      </div>
      <div class="w-48">
        <p class="font-bold">Length</p>
        <p class="">{{$data['length']}} mm</p>
      </div>
    </div>

  </div>

  </div>

  <script>

        let img = 1;
        let max = 4;
        let min = 0;

      function image(){
            let carousel = document.querySelector('.carousel');
            let img1 = document.querySelector('.img1');
            let img2 = document.querySelector('.img2');
            let img3 = document.querySelector('.img3');

            if(img == 1){

                img1.style.display = 'block';
                img2.style.display = 'none';
                img3.style.display = 'none';

                return;
            }
            if(img == 2){

                img2.style.display = 'block';
                img3.style.display = 'none';
                img1.style.display = 'none';

                return;
            }
            if(img == 3){

                img3.style.display = 'block';
                img1.style.display = 'none';
                img2.style.display = 'none';

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
  