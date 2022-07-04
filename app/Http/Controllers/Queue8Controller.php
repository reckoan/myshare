<?php

namespace App\Http\Controllers;

use App\Models\Queue8;
use Illuminate\Http\Request;

class Queue8Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue8 = Queue8::paginate(20);

        return view('Queue8.index', compact('queue8'));
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
     * @param  \App\Models\Queue8  $queue8
     * @return \Illuminate\Http\Response
     */
    public function show(Queue8 $queue8)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue8  $queue8
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue8 $queue8)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue8  $queue8
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue8 $queue8)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue8  $queue8
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue8 $queue8)
    {
        //
    }
}
