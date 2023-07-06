@extends('Myview.template')

@section('title')
    Lista książek
@endsection



@section('content')
<div class="container">
    <table class="table">
    @isset($book)
       
        <tr>
            <td>Nazwa książki</td>
            <td> {{ $book->name }} </td>
        </tr>
        <tr>
            <td>Rok wydania</td>
            <td> {{ $book->year }} </td>
        </tr>
        <tr>
            <td>Data publikacji</td>
            <td> {{ $book->publication_place }} </td>
        </tr>
        <tr>
            <td>Liczba stron</td>
            <td> {{ $book->pages }} </td>
        </tr>
        <tr>
            <td>Cena</td>
            <td> {{ $book->price }} </td> 
        </tr>


</table>
</div>
@endif

@endsection