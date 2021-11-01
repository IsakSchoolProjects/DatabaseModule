<?php

$_SITE_TITLE = 'Module_4_Database'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SITE_TITLE ?></title>

    <link rel="stylesheet" href="./css/tailwind.css">
    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta2/css/all.css">
</head>
<body class="min-h-screen flex flex-col">

    <?php
    
        include 'header.php';
    
    ?>

    <div>
        <h1 class="text-4xl center mb-8">About Us</h1>
        <p class="text-md center w-96 mx-auto">We are a group of three, with an assignment to create an application with a database. 
            Our idea is to create an application that sells cars.</p>
    </div>


    <div class="flex flex-row  mx-auto mt-16">
        <div class="w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg">
            <img class="w-32 h-32 rounded-full mx-auto m-2" src="../media/images/cars/cat.jpg" alt="name of">
            <h2 class="text-2xl center pb-6">Namn1</h2>
            <p>Vad har name1 gjort, ... Lorem ipsum dolor sit amet.</p>

            <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a href="#">Länknamn</a></p>
        </div>
        <div class="mx-20 w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg">
            <img class="w-32 h-32 rounded-full mx-auto m-2" src="../media/images/cars/cat.jpg" alt="name of">
            <h2 class="text-2xl center pb-6">Namn2</h2>
            <p>Vad har name2 gjort, ... Lorem ipsum dolor sit amet.</p>

            <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a href="#">Länknamn</a></p>
        </div>
        <div class="w-52 bg-gray-100 p-6 rounded-t-full rounded-b-lg">
            <img class="w-32 h-32 rounded-full mx-auto m-2" src="../media/images/cars/cat.jpg" alt="name of">
            <h2 class="text-2xl center pb-6">Namn3</h2>
            <p>Vad har name3 gjort, ... Lorem ipsum dolor sit amet.</p>

            <p class="text-blue-300 mt-4 hover:text-blue-400"><i class="fab fa-linkedin mr-2"></i><a href="#">Länknamn</a></p>
        </div>

    </div>

    <br><br><br><br>

    <div class="flex flex-row mx-auto">

        <div style="width: 400px;" class="mr-8 bg-gray-100 p-10">
            <h1 class="text-4xl mb-4">Project</h1>
            <h1 class="text-2xl pl-4 pt-2">Idea</h1>
            <p class="pl-4">Kort bakgrund kring projektet... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, saepe?</p>

            <h1 class="text-2xl pl-4 pt-6">Product</h1>
            <p class="pl-4">En kort beskrivning om produkten som byggs... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, explicabo!</p>    
        </div>

        <div style="width: 400px;" class="ml-8 bg-gray-100 p-10">
            <h1 class="text-4xl mb-4">Result</h1>
            <h1 class="text-2xl pl-4 pt-2">Product</h1>
            <p class="pl-4">En kort beskrivning om produkten som byggs... Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, explicabo!</p>
            
            <h1 class="text-2xl pl-4 pt-6">Idea</h1>
            <p class="pl-4">Kort bakgrund kring projektet... Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis, saepe?</p>
        </div>

        <!-- We are a group of three, with an assignment to create an application with a database. Our idea is to create an application that sells cars.

Idea:
The main idea of our project is to create an application that sells cars, where the user not only can put cars in the cart but also like and save their favorite products if they have an account.

By catching the interest of the user we will have a landing page with information about how it all works.  -->

    </div>


    <br><br><br><br>

    <div class="flex flex-row mx-auto gap-14">
        <div class="bg-gray-100 p-8 w-56">
            <h1 class="text-2xl text-blue-500 mb-4">Tools</h1>

            <p class="hover:text-blue-500"><a target="_blank" href="https://tailwindcss.com/">Tailwind</a></p>
            <p class="hover:text-blue-500"><a target="_blank" href="https://fontawesome.com/">Font Awesome</a></p>
        </div>
        <div class="bg-gray-100 p-8 w-56">
            <h1 class="text-2xl text-blue-500 mb-4">Links</h1>

            <p class="hover:text-blue-500"><a target="_blank" href="#">Github</a></p>
            <p class="hover:text-blue-500"><a target="_blank" href="#">SQL</a></p>
        </div>
        <div class="bg-gray-100 p-8 w-56 mb-4">
            <h1 class="text-2xl text-blue-500">Hmm..</h1>
        </div>
    </div>
    
    <br><br><br>

    <?php
        
        include 'footer.php';

    ?>

</body>
</html>