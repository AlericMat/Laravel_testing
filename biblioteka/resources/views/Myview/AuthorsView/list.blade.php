@extends('Myview.template')

@section('title')
    Lista autorów
@endsection

@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Data urodzenia</th>
            <th>Gatunki</th>
            <th>Książki</th>
        </tr>
        <tr>
            @forelse($authorList as $author)
                <td> {{ $author->lastname }}</td>
                <td> {{ $author->firstname }}</td>
                <td> {{ $author->birthday }}</td>
                <td> {{ $author->genres }}</td>
                <td>
            @foreach($author->book as $book)
                <a href="{{ url('/books', [$book->id]) }}">{{ $book->name }}</a>
            @endforeach
                </td>
                </tr>
            @empty  
                Brak rekordów
            @endforelse
</table>
</div>
@endsection
