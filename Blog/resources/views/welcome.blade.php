<!-- resources/views/index.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body,
        p,
        h1,
        h2,
        h3,
        h4,
        span {
            font-family: "Poppins", sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Project</title>
    <!-- Vite CSS and JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100 text-gray-900">
    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-indigo-500 to-purple-500">

        <div class="text-center p-8">
            <h1 class="text-4xl font-extrabold text-white mb-4">Welcome to the Laravel Project</h1>
            <p class="text-xl text-white mb-6">A simple and responsive project template with Tailwind CSS and DaisyUI.
            </p>

            <!-- DaisyUI Button -->
            <a href="{{ url('/about') }}" class="btn btn-secondary text-white">about</a>
        </div>

        <div class="footer mt-auto p-4 bg-gray-800 text-white text-center w-full">
            <p>&copy; 2025 My Laravel Project. All Rights Reserved.</p>
        </div>
    </div>

</body>

</html>
