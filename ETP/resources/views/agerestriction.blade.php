<!DOCTYPE html>
<html>
<head>
    <title>Age Restricted Access</title>
</head>
<body>

    <h1>Age Verification</h1>

    @if (session('age') === null)
        <form method="POST" action="/set-age">
            @csrf
            <label for="age">Enter your age:</label>
            <input type="number" name="age" id="age" required>
            <button type="submit">Submit</button>
        </form>
    @elseif (session('age') < 18)
        <h2 style="color: red;">Access Restricted</h2>
        <p>You must be at least 18 years old to access this site.</p>
        <form method="POST" action="/set-age">
            @csrf
            <label for="age">Enter your correct age:</label>
            <input type="number" name="age" id="age" required>
            <button type="submit">Try Again</button>
        </form>
    @else
        <h2>Welcome to the application!</h2>
        <p>You are {{ session('age') }} years old. Access granted.</p>
    @endif

</body>
</html>
