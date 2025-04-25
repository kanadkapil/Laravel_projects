<!-- resources/views/about.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About - Laravel Project</title>

    <!-- Vite CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-green-500 to-blue-500">

        <div class="text-center p-8">
            <h1 class="text-4xl font-extrabold text-white mb-4">About Us</h1>
            <p class="text-xl text-white">We are a group of passionate developers working on a Laravel project!</p>

            <a href="{{ url('/') }}" class="btn btn-secondary text-white mt-4">Go Back to Home</a>
        </div>

    </div>

</body>

</html>
