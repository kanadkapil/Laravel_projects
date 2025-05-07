<h1>Library Books</h1>
<a href="{{ route('books.create') }}">Add Book</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($books as $book)
        <li>
            <strong>{{ $book->title }}</strong> by {{ $book->author }} ({{ $book->year }})
            <a href="{{ route('books.edit', $book) }}">Edit</a>

            <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
