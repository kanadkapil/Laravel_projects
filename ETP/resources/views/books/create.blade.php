<h1>Add Book</h1>
<form method="POST" action="{{ route('books.store') }}">
    @csrf
    Title: <input name="title" required><br>
    Author: <input name="author" required><br>
    Year: <input name="year" type="number" required><br>
    <button type="submit">Add</button>
</form>
