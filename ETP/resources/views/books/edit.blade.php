<h1>Edit Book</h1>
<form method="POST" action="{{ route('books.update', $book) }}">
    @csrf @method('PUT')
    Title: <input name="title" value="{{ $book->title }}" required><br>
    Author: <input name="author" value="{{ $book->author }}" required><br>
    Year: <input name="year" value="{{ $book->year }}" type="number" required><br>
    <button type="submit">Update</button>
</form>
