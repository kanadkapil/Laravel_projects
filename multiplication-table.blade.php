<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h1>Multiplication Table for {{ $number }} (Range: 1 to {{ $range }})</h1>
    <ul>
        @foreach ($table as $row)
            <li>{{ $row }}</li>
        @endforeach
    </ul>
    <a href="{{ route('multiplication.index') }}">Generate Another Table</a>
</body>
</html>