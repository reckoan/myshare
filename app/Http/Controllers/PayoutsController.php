<?php

namespace App\Http\Controllers;

use App\Queue1move;
use App\Queue2move;
use App\Queue3move;
use App\Queue4move;
use App\Queue5move;
use App\Queue6move;
use App\Queue7move;
use App\Queue8move;
use Illuminate\Http\Request;

class PayoutsController extends Controller
{
    public function index()
    {
        $payout1 = Queue1move::count();
        $payout2 = Queue2move::count();
        $payout3 = Queue3move::count();
        $payout4 = Queue4move::count();
        $payout5 = Queue5move::count();
        $payout6 = Queue6move::count();
        $payout7 = Queue7move::count();
        $payout8 = Queue8move::count();
        
        return view('payouts.index', compact('payout1','payout2','payout3','payout4','payout5','payout6','payout7','payout8'));
    }

    public function payouts1()
    {
        # code...
    }

    public function payouts2()
    {
        # code...
    }

    public function payouts3()
    {
        # code...
    }

    public function payouts4()
    {
        # code...
    }

    public function payouts5()
    {
        # code...
    }

    public function payouts6()
    {
        # code...
    }

    public function payouts7()
    {
        # code...
    }

    public function payouts8()
    {
        # code...
    }


}
