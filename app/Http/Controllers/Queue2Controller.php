<?php

namespace App\Http\Controllers;

use App\Models\Queue2;
use Illuminate\Http\Request;

class Queue2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue2 = Queue2::paginate(20);

        return view('Queue2.index', compact('queue2'));
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
     * @param  \App\Models\Queue2  $queue2
     * @return \Illuminate\Http\Response
     */
    public function show(Queue2 $queue2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue2  $queue2
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue2 $queue2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue2  $queue2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue2 $queue2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue2  $queue2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue2 $queue2)
    {
        //
    }
}
