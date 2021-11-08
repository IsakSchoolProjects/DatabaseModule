<?php

$_SITE_TITLE = 'Module_4_Database'

?>

@extends('layouts/app')

@section('content')

    <div class="my-20 flex flex-col">
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


@endsection

</body>
</html>