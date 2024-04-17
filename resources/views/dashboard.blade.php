@include('partials.header')

<table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
            <th>Title</th>
            <th>Author</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <!-- Add more columns as needed -->
        </tr>
        @endforeach
    </tbody>
</table>

@include('partials.footer')