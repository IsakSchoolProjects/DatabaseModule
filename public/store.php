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
    
    </div>

    <?php
    
        include 'components/footer.php';
    
    ?>

</body>
</html>