<?php

namespace App\Http\Controllers;

use App\Models\Queue3;
use Illuminate\Http\Request;

class Queue3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue3 = Queue3::paginate(20);

        return view('Queue3.index', compact('queue3'));
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
     * @param  \App\Models\Queue3  $queue3
     * @return \Illuminate\Http\Response
     */
    public function show(Queue3 $queue3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue3  $queue3
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue3 $queue3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue3  $queue3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue3 $queue3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue3  $queue3
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue3 $queue3)
    {
        //
    }
}
