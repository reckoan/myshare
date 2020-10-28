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
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovedController extends Controller
{
    public function Que1Moved()
    {
        
        $que1moved = Queue1move::latest()->paginate(15);
        
        return view('admin.Moved.que1', compact('que1moved'));
    }

   
    public function Que2Moved()
    {
        
        $que2moved = Queue2move::latest()->paginate(15);
        
        return view('admin.Moved.que2', compact('que2moved'));
    }

    public function Que3Moved()
    {
        
        $que3moved = Queue3move::latest()->paginate(15);
        
        return view('admin.Moved.que3', compact('que3moved'));
    }
    public function Que4Moved()
    {
        
        $que4moved = Queue4move::latest()->paginate(15);
        
        return view('admin.Moved.que4', compact('que4moved'));
    }
    public function Que5Moved()
    {
        
        $que5moved = Queue5move::latest()->paginate(15);
        
        return view('admin.Moved.que5', compact('que5moved'));
    }
    public function Que6Moved()
    {
        
        $que6moved = Queue6move::latest()->paginate(15);
        
        return view('admin.Moved.que6', compact('que6moved'));
    }
    public function Que7Moved()
    {
        
        $que7moved = Queue7move::latest()->paginate(15);
        
        return view('admin.Moved.que7', compact('que7moved'));
    }
    public function Que8Moved()
    {
        
        $que8moved = Queue8move::latest()->paginate(15);
        
        return view('admin.Moved.que8', compact('que8moved'));
    }

    public function update1($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue1move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue1move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy1($id)
    {
        $destroy = Queue1move::findOrFail($id);
        $destroy->delete();
       
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update2($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue2move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue2move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }


    public function destroy2($id)
    {
        $destroy = Queue2move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update3($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue3move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue3move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy3($id)
    {
        $destroy = Queue3move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update4($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue4move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue4move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy4($id)
    {
        $destroy = Queue4move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update5($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue5move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue5move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy5($id)
    {
        $destroy = Queue5move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update6($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue6move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue6move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy6($id)
    {
        $destroy = Queue6move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update7($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue7move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue7move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy7($id)
    {
        $destroy = Queue7move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }

    public function update8($id, Request $request)
    {
        
         $this->validate($request, [
             'payid' => ['required'],
             'pay_amount' => ['required'],
         ]);

        $getData = Queue8move::findOrFail($id);
        
        $params = [
            'isPayed' => 1,   
            'payid' => $request->payid,   
            'payDate' => Carbon::now(),   
            'pay_amount' => $request->pay_amount,   
        ]; 
        
        $update = Queue8move::whereId($id)->update($params);
        
        if ($update) {
           
            return redirect()->back()->with('updated', 'Update Success');
        }else{

            return redirect()->back()->with('error', 'Something Went Wrong Please try Again');
        }


    }

    public function destroy8($id)
    {
        $destroy = Queue8move::findOrFail($id);
        $destroy->delete();
        return redirect()->back()->with('delete', 'Record has been deleted successfully');
    }



}
