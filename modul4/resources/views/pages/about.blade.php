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


<div class="flex flex-row  mx-auto mt-16">
    <div class="filter drop-shadow w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg ">
        <img class="w-32 h-32 rounded-full mx-auto m-2" src="./media/images/about/cat.jpg" alt="name of">
        <h2 class="text-2xl center pb-6">Isak</h2>
        <p>Vad har name1 gjort, ... Lorem ipsum dolor sit amet.</p>

        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a target="_blank" href="#">Länknamn</a></p>
        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fal fa-briefcase mr-2"></i><a target="_blank" href="#">Länknamn</a></p>
    </div>
    <div class="filter drop-shadow mx-20 w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg">
        <img class="w-32 h-32 rounded-full mx-auto m-2" src="./media/images/about/matilda.png" alt="name of">
        <h2 class="text-2xl center pb-6">Matilda</h2>
        <p>Vad har name2 gjort, ... Lorem ipsum dolor sit amet.</p>

        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a target="_blank" href="#">Länknamn</a></p>
        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fal fa-briefcase mr-2"></i><a target="_blank" href="#">Länknamn</a></p>

    </div>
    <div class="filter drop-shadow w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg">
        <img class="w-32 h-32 rounded-full mx-auto m-2" src="./media/images/about/cat.jpg" alt="name of">
        <h2 class="text-2xl center pb-6">Sebastian</h2>
        <p>Vad har name3 gjort, ... Lorem ipsum dolor sit amet.</p>

        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a target="_blank" href="#">Länknamn</a></p>
        <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fal fa-briefcase mr-2"></i><a target="_blank" href="#">Länknamn</a></p>

    </div>

</div>

<br><br><br>

<div class="flex  mx-auto py-16 border-b border-t border-gray-200">

    <div style="width: 400px;" class="filter drop-shadow mr-8 bg-gray-100 p-10 rounded-lg flex-1">
        <h1 class="text-4xl mb-4 border-b pb-1 border-gray-300">Project Description</h1>
        <h1 class="text-2xl pl-4 pt-2">Product</h1><br>
        <p class="pl-4">The product should base on a database. Users should be able to change, update and save.</p><br>
        <p class="pl-4">The database has to contain at least five tables. Tables are not allowed to miss a relation between each other. The backend has to be written in PHP or Laravel.</p>  
        
        <h1 class="text-2xl pl-4 pt-6">Idea</h1><br>
        <p class="pl-4">The main idea of our project is to create an application that sells cars, where the user not only can put cars in the cart but also like and save their favorite products if they have an account.</p><br>
        <p class="pl-4">To catch the interest of the user we will have a landing page with information about how it all works and show some interesting pictures of the cars.</p>

        <h1 class="text-2xl pl-4 pt-6">Goals</h1><br>
        <ul class="pl-4 list-inside">
            <li>Learn Laravel</li>
            <li>Handle Database</li>
        </ul>
    </div>

    <div style="width: 400px;" class="filter drop-shadow ml-8 bg-gray-100 p-10 rounded-lg flex-1">
        <h1 class="text-4xl mb-4 border-b pb-1 border-gray-300">Result</h1>
        <h1 class="text-2xl pl-4 pt-2">Product</h1><br>
        <p class="pl-4">The homepage contains a carousel/slide with pictures of cars and a short text, and a "read more" button. We want the user to be interested in our cars and company.</p><br>
        <p class="pl-4">The "recently added" section under the slide shows the three latest added cars from the database. If the user can see that the site is updated or we frequently get new cars, the user might find us as a popular and serious company.</p><br>
        <p class="pl-4">Lastly, we have a contact form where the user can contact us without making an account, we do not want it to be complicated to contact us.</p><br>
        <p class="pl-4">The user can look at different cars without being logged in. To be able to put items in the cart or like an item they need an account and to be logged in.</p><br>
        <p class="pl-4">The store page contains a list of all of the cars. The user can read more about a specific vehicle by clicking on the item and this will get a full page of information about the vehicle.</p><br>

    </div>

</div>


<br><br><br>

<div class="flex flex-row mx-auto gap-14">
    <div class="filter drop-shadow bg-gray-100 p-8 w-56 rounded-lg">
        <h1 class="text-2xl text-blue-500 mb-4 border-b border-gray-300">Links</h1>

        <p class="hover:text-blue-500"><a target="_blank" href="https://github.com/isakjensen/Module_4_Database.git">Github</a></p>
        <p class="hover:text-blue-500"><a target="_blank" href="#">SQL</a></p>
        
    </div>
    <div class="filter drop-shadow bg-gray-100 p-8 w-56 rounded-lg">
        <h1 class="text-2xl text-blue-500 mb-4 border-b border-gray-300">Tools</h1>

        <p class="hover:text-blue-500"><a target="_blank" href="https://fontawesome.com/">Font Awesome</a></p>
        <p class="hover:text-blue-500"><a target="_blank" href="https://tailwindcss.com/">Tailwind</a></p>
        <p class="hover:text-blue-500"><a target="_blank" href="https://laravel.com/">Laravel</a></p>
        <p class="hover:text-blue-500"><a target="_blank" href="https://laravelcollective.com/">Laravel Collective</a></p>
    </div>
    <div class="filter drop-shadow bg-gray-100 p-8 w-56 rounded-lg">
        <h1 class="text-2xl text-blue-500 mb-4 border-b border-gray-300">Languages</h1>

        <p class="hover:text-blue-500">HTML</p>
        <p class="hover:text-blue-500">CSS</p>
        <p class="hover:text-blue-500">PHP</p>
        <p class="hover:text-blue-500">Laravel</p>
    </div>
</div>

<br><br><br>

@endsection