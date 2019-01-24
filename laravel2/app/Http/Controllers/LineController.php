<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nguoidung;
class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $line = nguoidung::get();
       // dd($line);
        return view('html.nguoidung',compact('line'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('html.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $line = new nguoidung($request->all());
        $result = $line->save();
        if ($result) {
            echo('Success');
        } else echo('Fail');
        return redirect()->route('trangchu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        // $book = Book::findOrFail($id);
        // return view('book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $book = Book::findOrFail($id);
        // $value = $book->update($request->all());
        // if ($value) {
        //     echo("Success");
        // } else echo ("Fail");
        // return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $line = nguoidung::findOrFail($id);
        $line->delete();
        return redirect()->route('trangchu.index');
    }
}
