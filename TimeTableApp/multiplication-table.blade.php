<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Multiplication Table for {{ $number }} (Range: 1 to {{ $range }})</h1>
        <ul class="space-y-2">
            @foreach ($table as $row)
                <li class="bg-gray-50 p-3 rounded-md shadow-sm">{{ $row }}</li>
            @endforeach
        </ul>
        <a href="{{ route('multiplication.index') }}" class="mt-6 block text-center text-indigo-600 hover:text-indigo-700">
            Generate Another Table
        </a>
    </div>
</body>
</html>
