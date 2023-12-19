<!-- resources/views/navigation.blade.php -->
<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa; /* Adjust the background color as needed */
    }

    .container {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .nav-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
        background-color: #3498db; /* Adjust the background color as needed */
        padding: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow */
    }

    .nav-links {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-links li {
        margin-right: 1rem;
    }

    .nav-links a {
        color: #fff;
        text-decoration: none;
        font-size: 16px; /* Adjust the font size as needed */
        transition: color 0.3s ease; /* Add a smooth transition on hover */
    }

    .nav-links a:hover {
        color: #ccc; /* Adjust the hover color as needed */
    }

    .nav-links button {
        color: #fff;
        text-decoration: none;
        background: none;
        border: none;
        cursor: pointer;
        font-size: 16px; /* Adjust the font size as needed */
        transition: color 0.3s ease; /* Add a smooth transition on hover */
    }

    .nav-links button:hover {
        color: #ccc; /* Adjust the hover color as needed */
    }
</style>

<nav class="bg-blue-500 p-4">
    <div class="container mx-auto nav-container">
        <a class="text-white text-lg font-semibold" href="{{ url('./notes') }}">Home</a>

        <ul class="nav-links">
            @guest
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}">Register</a>
                </li>
            @else
                <li>
                    <a href="{{ route('notes.index') }}">My Notes</a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                </li>
            @endguest
        </ul>
    </div>
</nav>
