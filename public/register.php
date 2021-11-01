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

    <!-- Header -->
    <?php
        
        include 'components/header.php';

    ?>

    <div class="my-20 flex flex-col">
        <div class="bg-gray-700 p-6 w-80 m-auto rounded-3xl">
            <div class="text-gray-300 font-bold border-b w-24 mb-4 border-gray-300">Register</div>
                <input placeholder="Username" class="text-white bg-transparent border-b border-gray-600" />
                <input placeholder="Password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" />
                <input placeholder="Confirm password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" />
            <div class="mt-6">
                <button class="bg-blue-400 p-1 rounded-lg w-24">Log in</button>
                <button class="bg-gray-400 p-1 rounded-lg w-24">Register</button>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <?php
    
        include 'components/footer.php';

    ?>

</body>
</html>