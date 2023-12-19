<!-- resources/views/navigation.blade.php -->

<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex items-center justify-between">
        <a class="text-white text-lg font-semibold" href="{{ url('/') }}">Home</a>

        <button class="text-white focus:outline-none lg:hidden">
            <span class="text-2xl">&#8801;</span>
        </button>

        <div class="hidden lg:flex lg:items-center lg:w-auto">
            <ul class="flex items-center">
                @guest
                    <li class="mr-4">
                        <a class="text-white hover:text-gray-300" href="{{ route('login') }}">Login</a>
                    </li>
                    <li>
                        <a class="text-white hover:text-gray-300" href="{{ route('register') }}">Register</a>
                    </li>
                @else
                    <li class="mr-4">
                        <a class="text-white hover:text-gray-300" href="{{ route('notes.index') }}">My Notes</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-white hover:text-gray-300 focus:outline-none">Logout</button>
                        </form>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
