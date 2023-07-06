<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Book;
use App\Models\Author;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authorList = Author::all();
        return view('Myview/AuthorsView/list',['authorList'=>$authorList]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $author = new Author();
        $author->lastname = 'Straub';
        $author->firstname = 'Peter';
        $author->birthday = '1943-03-02';
        $author->genres = 'horrory, thrillery';
        $author->save();
        
        $authorSecound = new Author();
        $authorSecound->lastname = 'King';
        $authorSecound->firstname = 'Stephen';
        $authorSecound->birthday = '1947-09-21';
        $authorSecound->genres = 'horrory, thrillery';
        $authorSecound->save();

        $czarnydom = Book::where('name','Czarny Dom')->first();
        $czarnydom->author()->attach($author);
        $czarnydom->author()->attach($authorSecound);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
