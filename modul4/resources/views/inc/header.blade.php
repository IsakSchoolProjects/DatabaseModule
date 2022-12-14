<header class="bg-background text-gray-400 flex flex-col h-36 px-6 md:px-24 lg:px-26 xl:px-36 2xl:px-80">
    <nav class="flex flex-row justify-between my-auto">
        <!-- Left -->
        <div class="flex flex-row gap-16 text-lg my-auto">
            <a href="/" class="text-gray-400 hover:text-content">Home</a>
            <a href="/store/no_order" class="text-gray-400 hover:text-content">Store</a>
            <a href="/about" class="text-gray-400 hover:text-content">About</a>
            @if(!Auth::guest())<a href="/cart" class="text-gray-400 hover:text-content">Cart</a>@endif
        </div>
        <!-- Right -->
        @guest
        @if(Route::has('login'))

            <div class="flex flex-row gap-6 text-md">
                    <a href="/login" class="py-2 hover:text-content">Login</a>
                @endif
                @if(Route::has('register'))
                    <a href="/register" class="bg-blue-500 px-6 py-2 rounded-md text-blue-200 font-medium hover:bg-blue-600">Register</a>
            </div>
        @endif
        @else
            <div class="flex flex-row gap-6 text-md">
                <a href="/settings" class="text-highlight py-2 my-auto hover:text-content">{{ Auth::user()->name }}</a>
                {{-- Not working on everyones computer --}}
                {{-- <img class="w-16 rounded-full border border-content" src="/storage/profile_images/{{ Auth::user()->profile }}"> --}}
                <img class="w-16 rounded-full border border-content" src="{{ Auth::user()->profile }}">
            </div>

        @endguest
    </nav>
</header>