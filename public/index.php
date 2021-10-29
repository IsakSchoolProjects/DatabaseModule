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

    <header class="bg-background text-gray-400 flex flex-col h-36 px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
        <nav class="flex flex-row justify-between my-auto">
            <!-- Left -->
            <div class="flex flex-row gap-16 text-lg my-auto">
                <a href="#" class="text-gray-400 hover:text-content">Home</a>
                <a href="#" class="text-gray-400 hover:text-content">About</a>
                <a href="#" class="text-gray-400 hover:text-content">Store</a>
            </div>
            <!-- Right -->
            <div class="flex flex-row gap-6 text-md">
                <a href="login.php" class="py-2 hover:text-content">Login</a>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">Register</a>
            </div>

            <div class="hidden flex flex-row gap-6 text-md">
                <a href="#" class="text-highlight py-2 my-auto hover:text-content">John Doe</a>
                <img class="w-16 rounded-full border border-content" src="https://i.pravatar.cc/100">
            </div>
        </nav>
    </header>

    <main class="bg-background flex flex-grow px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
        <div class="bg-container rounded-lg w-full">s</div>
    </main>

    <!-- Carousel -->
    <!-- <div style="margin:auto;" class="landing-page">
        <div class="carousel"> -->
            <!-- <h1 class="text-4xl">Safety first</h1> -->
            <!-- <img class="rounded-md" src="../media/images/cars/l1.jpg" class="" alt="">
        </div>

        <div> -->
            <!-- Left -->
            <!-- <div class="flex flex-row"><i onclick="prev()" class="fas fa-chevron-left fa-3x cursor-pointer"></i></div> -->

            <!-- Right -->
            <!-- <div class="flex flex-row-reverse"><i onclick="next()" class="fas fa-chevron-right fa-3x cursor-pointer"></i></div>
        </div>
    </div>

    <br><br> -->

    <!-- Recently added -->
    <!-- <h1 style="text-align: center;" class="text-5xl mb-20">Recently added</h1>

    <div style="max-height: 500px" class="flex flex-row gap-10 px-20 pb-20 my-auto">
        <div style="" class="flex-1 bg-gray-200 rounded-md w-12">
            <img src="../media/images/cars/l1.jpg" class="rounded-md" alt="">
            <div class="p-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div>
        <div style="" class="flex-1 bg-gray-200 rounded-md w-12">
            <img src="../media/images/cars/l1.jpg" class="rounded-md" alt="">
            <div class="p-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div>
        <div style="" class="flex-1 bg-gray-200 rounded-md w-12">
            <img src="../media/images/cars/l1.jpg" class="rounded-md" alt="">
            <div class="p-3 mb-3">
                <h1 class="text-xl mb-5">Hello</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, nobis.</p>
                <br>
                <a href="#" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">More</a>
            </div>
            
        </div>
    </div> -->

    <!-- <br><br> -->

    <footer style="box-shadow:inset 0px 2px 10px 0px #3B82F6;" class="flex flex-row gap-20 bg-gray-600 rounded-t-xl py-7 pl-20 pr-20">

        <div class=" mx-5 ml-10 flex-1">
            <h2 class="text-xl text-blue-500 pb-2">Products</h2>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Store</a></p>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Cart</a></p>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Liked</a></p>
        </div>

        <div class=" flex-1">
            <h2 class="text-xl text-blue-500 pb-2">Account</h2>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Login</a></p>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Register</a></p>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">Account</a></p>
        </div>

        <div class=" flex-1">
            <h2 class="text-xl text-blue-500 pb-2">About</h2>
            <p class="text-xs text-gray-200 hover:text-blue-500"><a href="#">How it works</a></p>
        </div>

        <div class="flex-1">
        <i style="color: #3B82F6;" class="fas fa-cars fa-4x"></i><!-- Logo -->
        </div>
            
    </footer>

    <script>

        // Carousel
        let img = 1;
        let max = 3;
        let min = 0;
        
        function image(){
            let carousel = document.querySelector('.carousel');
            if(img == 1){
                carousel.innerHTML = `<img class="rounded-md" src="../media/images/cars/l1.jpg" class="" alt="">`;
                return;
            }
            if(img == 2){
                carousel.innerHTML = `<img class="rounded-md" src="../media/images/cars/l2.jpg" class="" alt="">`;
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

</body>
</html>