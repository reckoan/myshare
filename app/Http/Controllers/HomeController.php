<?php

namespace App\Http\Controllers;

use App\Models\Queue1;
use App\Models\Queue2;
use App\Models\Queue3;
use App\Models\Queue4;
use App\Models\Queue5;
use App\Models\Queue6;
use App\Models\Queue7;
use App\Models\Queue8;
use App\Models\Waiting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $Waiting = Waiting::count();
        $Queue1  = Queue1::count();
        $Queue2  = Queue2::count();
        $Queue3  = Queue3::count();
        $Queue4  = Queue4::count();
        $Queue5  = Queue5::count();
        $Queue6  = Queue6::count();
        $Queue7  = Queue7::count();
        $Queue8  = Queue8::count();
        $WaitingList = Waiting::latest()->limit(10)->get();
        
        
        return view('home', compact('Waiting','Queue1','Queue2','Queue3','Queue4','Queue5','Queue6','Queue7','Queue8','WaitingList'));
    }

    
}
