<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

    <h2>Student Registration Form</h2>

    {{-- Success message --}}
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Display validation errors --}}
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/register">
        @csrf

        <label for="name">Name:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="age">Age:</label><br>
        <input type="number" name="age" value="{{ old('age') }}"><br><br>

        <button type="submit">Register</button>
    </form>

</body>
</html>
