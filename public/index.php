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
                <a href="#" class="py-2 hover:text-content">Login</a>
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

    <footer style="box-shadow:inset 0px 2px 10px #3B82F6;" class="bg-gray-600 rounded-xl h-24">

        <div class="flex gap-10 justify-between mt-8 ml-20 mr-20">

            <div class="">
                <h2 class="text-2xl text-blue-500">Products</h2>
                <p class="text-xs text-gray-200"><a href="#">Store</a></p>
            </div>
            <div class="">
                <h2 class="text-2xl text-blue-500">About</h2>
                <p class="text-xs text-gray-200"><a href="#">Account</a></p>
            </div>
            <div class="">
                <h2 class="text-2xl text-blue-500">Contact</h2>
            </div>
            

        </div>

    </footer>

</body>
</html>