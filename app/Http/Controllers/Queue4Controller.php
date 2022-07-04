<?php

namespace App\Http\Controllers;

use App\Models\Queue4;
use Illuminate\Http\Request;

class Queue4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue4 = Queue4::paginate(20);

        return view('Queue4.index', compact('queue4'));
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
     * @param  \App\Models\Queue4  $queue4
     * @return \Illuminate\Http\Response
     */
    public function show(Queue4 $queue4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue4  $queue4
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue4 $queue4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue4  $queue4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue4 $queue4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue4  $queue4
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue4 $queue4)
    {
        //
    }
}
