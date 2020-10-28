<?php

namespace App\Http\Controllers;

use App\Models\Queue7;
use Illuminate\Http\Request;

class Queue7Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue7 = Queue7::latest()->paginate(20);
       
        return view('Queue7.index', compact('queue7'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Queue7  $queue7
     * @return \Illuminate\Http\Response
     */
    public function show(Queue7 $queue7)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue7  $queue7
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue7 $queue7)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue7  $queue7
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue7 $queue7)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue7  $queue7
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue7 $queue7)
    {
        //
    }
}
