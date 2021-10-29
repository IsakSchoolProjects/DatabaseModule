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

    <div class="min-h-screen flex flex-col">
        <div class="bg-gray-700 p-6 w-80 m-auto rounded-3xl">
            <div class="text-gray-300 font-bold border-b w-24 mb-4 border-gray-300">Log in</div>
            <input placeholder="Username" class="text-white bg-transparent border-b border-gray-600" />
            <input placeholder="Password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" />
            <div class="mt-6">
                <button class="bg-blue-400 p-1 rounded-lg w-24">Log in</button>
                <button class="bg-gray-400 p-1 rounded-lg w-24">Register</button>
            </div>
        </div>
    </div>


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

</body>
</html>