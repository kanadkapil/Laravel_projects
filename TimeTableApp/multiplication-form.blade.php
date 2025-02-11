<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Multiplication Table Generator</h1>
        <form action="{{ route('multiplication.generate') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="number" class="block text-sm font-medium text-gray-700">Enter a number:</label>
                <input type="number" name="number" id="number" min="1" max="100" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div>
                <label for="range" class="block text-sm font-medium text-gray-700">Enter the range:</label>
                <input type="number" name="range" id="range" min="1" max="20" required
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                Generate Table
            </button>
        </form>
    </div>
</body>

</html>
