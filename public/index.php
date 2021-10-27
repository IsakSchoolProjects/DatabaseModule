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
</head>
<body class="min-h-screen flex flex-col">

    <header class="bg-gray-200 flex flex-col h-24 px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
        <nav class="flex flex-row justify-between my-auto">
            <!-- Left -->
            <div class="flex flex-row gap-20 font-thin text-2xl">
                <div>Home</div>
                <div>About</div>
                <div>Store</div>
                <div>GitHub</div>
            </div>
            <!-- Right -->
            <div class="flex flex-row gap-4 font-thin text-lg">
                <div class="bg-blue-500 px-7 py-2 rounded-md">Login</div>
                <div>Register</div>
            </div>
        </nav>
    </header>

    <main class="bg-gray-400 flex flex-grow"></main>

    <footer class="bg-gray-600 h-24"></footer>

</body>
</html>