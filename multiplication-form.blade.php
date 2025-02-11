<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Generator</title>
</head>
<body>
    <h1>Multiplication Table Generator</h1>
    <form action="{{ route('multiplication.generate') }}" method="POST">
        @csrf
        <div>
            <label for="number">Enter a number:</label>
            <input type="number" name="number" id="number" min="1" max="100" required>
        </div>
        <div>
            <label for="range">Enter the range:</label>
            <input type="number" name="range" id="range" min="1" max="20" required>
        </div>
        <button type="submit">Generate Table</button>
    </form>
</body>
</html>