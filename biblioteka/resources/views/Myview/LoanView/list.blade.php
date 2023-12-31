@extends('Myview.template')

@section('title')
    Lista wypożyczeń
@endsection

@section('content')
<div class="container">
    <table class="table">
        <tr>
            <th>Nazwa książki</th>
            <th>Data wypożyczenia</th>
            <th>Data planowanego zwrotu</th>
            <th>Data zwrotu</th>
            <th>Dane klienta</th>
        </tr>
            @forelse($loanList as $loan)
        <tr>
                <td> {{ $loan->book->name }}</td>
                <td> {{ $loan->loaned_on }}</td>
                <td> {{ $loan->estimated_on }}</td>
                <td> {{ $loan->returned_on }}</td>
                <td> {{ $loan->client }}</td>
        </tr>
            @empty  
                Brak rekordów
            @endforelse
</table>
</div>
@endsection


