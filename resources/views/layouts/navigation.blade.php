<!-- resources/views/navigation.blade.php -->
<style>
    .inline {
        display: inline-flex;
        margin-right: 1rem; /* Adjust the margin as needed */
        color: #fff; /* Adjust the text color */
        text-decoration: none;
        hover: #ccc; /* Adjust the hover color */
        outline: none;
        background: none;
        border: none;
        cursor: pointer;
    }
</style>

<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex items-center justify-between hidden lg:flex lg:items-center lg:w-auto">
        <a class="text-white text-lg font-semibold" href="{{ url('/') }}">Home</a>

        <!-- <button class="text-white focus:outline-none lg:hidden">
            <span class="text-2xl">&#8801;</span>
        </button> -->

            <ul class="inline" type='none'>
                @guest
                    <li class="mr-4">
                        <a class="text-white hover:text-gray-300" href="{{ route('login') }}">Login
                    </a>
                    </li>
                    &nbsp;&nbsp;&nbsp;
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
</nav>
