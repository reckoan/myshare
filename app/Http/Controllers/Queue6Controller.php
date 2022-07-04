<?php

namespace App\Http\Controllers;

use App\Models\Queue6;
use Illuminate\Http\Request;

class Queue6Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue6 = Queue6::paginate(20);

        return view('Queue6.index', compact('queue6'));
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
     * @param  \App\Models\Queue6  $queue6
     * @return \Illuminate\Http\Response
     */
    public function show(Queue6 $queue6)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue6  $queue6
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue6 $queue6)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue6  $queue6
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue6 $queue6)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue6  $queue6
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue6 $queue6)
    {
        //
    }
}
