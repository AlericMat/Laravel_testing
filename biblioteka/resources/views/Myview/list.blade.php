@extends('Myview.template')

@section('title')
    Lista książek
@endsection



@section('content')
<div class="container">
    <table class="table">
    @forelse($booksList as $book)
       <tr>
            <td> {{ $book->name }} </td>
            <td> {{ $book->year }} </td>
            <td> {{ $book->publication_place }} </td>
            <td> {{ $book->pages }} </td>
            <td> {{ $book->price }} </td> 
        </tr>
    @empty
        Brak rekordów!
    @endforelse
</table>
</div>
@endsection

