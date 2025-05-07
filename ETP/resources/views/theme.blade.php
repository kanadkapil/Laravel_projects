<!DOCTYPE html>
<html>
<head>
    <title>Theme Preference</title>
    <style>
        body {
            background-color: {{ $theme === 'dark' ? '#222' : '#fff' }};
            color: {{ $theme === 'dark' ? '#fff' : '#000' }};
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <h1>Your Preferred Theme: {{ ucfirst($theme) }}</h1>

    <form method="POST" action="/set-theme">
        @csrf
        <label>Select Theme:</label><br>
        <select name="theme">
            <option value="light" {{ $theme === 'light' ? 'selected' : '' }}>Light</option>
            <option value="dark" {{ $theme === 'dark' ? 'selected' : '' }}>Dark</option>
        </select><br><br>
        <button type="submit">Save Preference</button>
    </form>

</body>
</html>
