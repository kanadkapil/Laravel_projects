<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <header>
        <h1>Student Management</h1>
        <hr>
    </header>

    <main>
        <h2>All Students</h2>

        <ul>
            @forelse($students as $student)
                <li>{{ $student->name }} ({{ $student->email }}, Age: {{ $student->age }})</li>
            @empty
                <li>No students found.</li>
            @endforelse
        </ul>
    </main>

    <footer>
        <hr>
        <p>&copy; 2025 Student App</p>
    </footer>

</body>
</html>
