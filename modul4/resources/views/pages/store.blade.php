<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')

@section('content')

    <main class="bg-background flex flex-grow px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
        <!-- <div class="bg-container rounded-lg w-full">s</div> -->
    </main>

    <!-- Carousel -->
    <div style="margin:auto;" class="landing-page">
        <div class="carousel">
            <h1 class="l1carouselText text-4xl font-black text-cyan-700">Volvo XC40</h1>
            <p class="l1carouselTextP text-2xl font-black text-cyan-700">Electric.</p>
            <a class="l1carouselLink text-md" href="#">Learn more ></a>
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

    <div style="max-height: 500px" class="flex flex-row gap-10 px-20 pb-20 my-auto">
    
    </div>

@endsection

</body>
</html>