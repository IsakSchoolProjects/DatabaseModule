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
    
        include 'components/header.php';
    
    ?>

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
        <div style="" class="flex-1 bg-gray-200 rounded-md md:w-12 lg:w-6 xl:w-6 2xl:w-6">
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
            
        </div>
    </div>

    <br><hr><br>

    <div class="border-2 border-highlight w-6/12 m-auto rounded-md center mt-16">
        <form class="p-12" action="">

            <h1 class="text-4xl pb-10">Contact Us</h1><br>

            <input class="mr-4 p-2 border-2 w-44" maxlength="64" max type="text" placeholder="name...">
            <input class="ml-2 p-2 border-2 w-44" maxlength="64" type="email" placeholder="email..."><br><br>

            <textarea onkeydown="textareaKeyDown()" id="textarea" class="w-96 p-2 border-2" maxlength="2064" name="msg" id="" cols="30" rows="5" placeholder="message..."></textarea>
            <p class="q">0</p><br><br>

            <a href="" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">Send</a>

        </form>
    </div><br><br><br>

    <?php
    
        include 'components/footer.php';
    
    ?>

    <script>

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
                carousel.innerHTML = `<h1 class="l1carouselText text-4xl font-black text-cyan-700">Volvo XC40</h1>
            <p class="l1carouselTextP text-2xl font-black text-cyan-700">Electric.</p><a class="l1carouselLink text-md" href="#">Learn more ></a><img class="rounded-md" src="../media/images/cars/l1.jpg" class="" alt="">`;
                return;
            }
            if(img == 2){
                carousel.innerHTML = `<h1 class="l2carouselText text-4xl font-black">Volvo S60</h1>
            <p class="l2carouselTextP text-2xl font-black">"The car of the year"</p>
            <a class="l2carouselLink text-md text-orange-50" href="#">Learn more ></a><img class="rounded-md" src="../media/images/cars/l2.jpg" class="" alt="">`;
                return;
            }
            if(img == 3){
                carousel.innerHTML = `<img class="rounded-md" src="../media/images/cars/l3.jpg" class="" alt="">`;
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