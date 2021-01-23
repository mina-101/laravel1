<?php

namespace App\Http\Controllers;

use App\Models\Example;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $examples = Example::orderBy('id', 'desc')->get();
        return view('layouts.example.list' , compact('examples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.example.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = $request->validate([
            'title' => ['required','string']
        ]);
        Example::create($date);
        return redirect(route('example.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function show(Example $example)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function edit(Example $example)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Example $example)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Example  $example
     * @return \Illuminate\Http\Response
     */
    public function destroy(Example $example)
    {
        //
    }
}
