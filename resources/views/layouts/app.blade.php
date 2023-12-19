<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Notes Sharing</title>

    <!-- Include Tailwind CSS (assuming you have it installed) -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    @include('layouts.navigation')

    <div class="container mx-auto mt-4">
        @yield('content')
    </div>

    <!-- Include Tailwind CSS and Bootstrap JS (assuming you have them installed) -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
