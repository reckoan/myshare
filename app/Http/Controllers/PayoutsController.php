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
        $payouts1 = Queue1move::latest()->paginate(20);
        
        return view('payouts.payouts1', compact('payouts1'));
    }

    public function payouts2()
    {
        $payouts2 = Queue2move::latest()->paginate(20);
        return view('payouts.payouts2', compact('payouts2'));
    }

    public function payouts3()
    {
        $payouts3 = Queue3move::latest()->paginate(20);
        return view('payouts.payouts3', compact('payouts3'));
    }

    public function payouts4()
    {
       
        $payouts4 = Queue4move::latest()->paginate(20);
        return view('payouts.payouts4', compact('payouts4'));
    }

    public function payouts5()
    {
        $payouts5 = Queue5move::latest()->paginate(20);
        return view('payouts.payouts5', compact('payouts5'));
    }

    public function payouts6()
    {
        $payouts6 = Queue6move::latest()->paginate(20);
        return view('payouts.payouts6', compact('payouts6'));
    }

    public function payouts7()
    {
        $payouts7 = Queue7move::latest()->paginate(20);
        return view('payouts.payouts7', compact('payouts7'));
    }

    public function payouts8()
    {
        $payouts8 = Queue8move::latest()->paginate(20);
        return view('payouts.payouts8', compact('payouts8'));
    }


}
