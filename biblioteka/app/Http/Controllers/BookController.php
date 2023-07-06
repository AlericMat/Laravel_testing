<?php

namespace App\Http\Controllers;

use App\Models\Isbn;
use App\Models\Book;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __invoke() {
        echo "Controller zdobyty";
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Book $book)
    {
        $bookList = Book::all();
        return view('Myview/list', ['booksList' =>  $bookList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $book= new Book();
        $book->name = 'Czarny Dom';
        $book->year = 2010;
        $book->publication_place = 'Warszawa';
        $book->pages = 640;
        $book->price = 49.99;
        $book->save();

        
        $isbn = new Isbn(['number' => '43252535', 'issued_on'=> '2015-04-20', 'issued_by'=>'Wydawca']);
        $book->isbn()->save($isbn);

        return redirect('books');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        return view('Myview/show',['book' => $book]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        $book->name = "Quo Vadis";
        $book->year = 2001;
        $book->publication_place = "Warszawa";
        $book->pages = 650;
        $book->price = 59.99;
        $book->save();

        return redirect('books');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('books');
    }

}
