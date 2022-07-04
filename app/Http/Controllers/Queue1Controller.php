<?php

namespace App\Http\Controllers;

use App\Models\Queue1;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class Queue1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queue1 = Queue1::paginate(20);

        return view('Queue1.index', compact('queue1'));
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
     * @param  \App\Models\Queue1  $queue1
     * @return \Illuminate\Http\Response
     */
    public function show(Queue1 $queue1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue1  $queue1
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue1 $queue1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Queue1  $queue1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Queue1 $queue1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue1  $queue1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Queue1 $queue1)
    {
        //
    }
}
