<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use Illuminate\View\View;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loanList = Loan::all();
        return view('Myview/LoanView/list',['loanList' => $loanList]);  //Przekazanie widoku -> view(sciezka do blade.php, przekazane parametry?)
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hobbit = Book::where('name', 'Hobbit')->first();

        $loan = new Loan();
        $loan->client = 'Radeusz Jakaciki, Jaworze 13, 00-900 Warszawa, 893 209 203';
        $loan->loaned_on = '2019-03-22';
        $loan->estimated_on = '2019-03-29';
        $loan->book_id = $hobbit->id;
        $loan->save();

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
