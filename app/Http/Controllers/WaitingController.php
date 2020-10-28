<?php

namespace App\Http\Controllers;

use App\Waitmoved;
use App\Models\Waiting;
use Illuminate\Http\Request;

class WaitingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $WaitmoveList = Waitmoved::paginate(20);
       
        return view('admin.wait.movelist', compact('WaitmoveList'));
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
        $this->validate($request, [
            'username' => ['required'],
            'name' => ['required'],
            'email' => ['required'],
            'bitcoin_address' => ['required'],
        ]);
           
        $data = [
            'username' => $request->username, 
            'name' => $request->name, 
            'email' => $request->email, 
            'bitcoin_address' => $request->bitcoin_address, 
        ];

        

        Waiting::create($data);

        return redirect()->route('waiting-list')->with('success', 'SUCCESSFULLY REGISTERED IN WAITING LIST');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Waiting  $waiting
     * @return \Illuminate\Http\Response
     */
    public function show(Waiting $waiting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Waiting  $waiting
     * @return \Illuminate\Http\Response
     */
    public function edit(Waiting $waiting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Waiting  $waiting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Waiting $waiting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waiting  $waiting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waiting $waiting)
    {
        //
    }
}
