<?php

namespace App\Http\Controllers;

use App\Waitmoved;
use Carbon\Carbon;
use App\Queue1move;
use App\Queue2move;
use App\Queue3move;
use App\Queue4move;
use App\Queue5move;
use App\Queue6move;
use App\Queue7move;
use App\Queue8move;
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
use Illuminate\Support\Facades\DB;

class WaitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waiting = Waiting::paginate(20);

        return view('admin.wait.index', compact('waiting'));
    }

    public function move(Request $request)
    {

       $process =  $this->Process($request->que_id, $request->id);
      // $this->algorithm();
       return redirect()->back()->with('success', 'list as been moved to Queue');

    }

    public function Process($que_id,$id)
    {

        for ($i=1; $i <= 8 ; $i++) {

            if ($que_id == $i) {


                $getRow = Waiting::findOrFail($id);

                $qdata = [
                      'name' => $getRow->name,
                      'email' => $getRow->email,
                      'bitcoin_address' => $getRow->bitcoin_address,
                      'username' => $getRow->username,
                      'created_at' => Carbon::now(),
                      'updated_at' => Carbon::now(),
                      'method' => 'Direct',

                  ];


                $insert = DB::table('queue'.$i.'s')->insert($qdata);


                  $move = Waitmoved::create($qdata);
                   if ($move) {
                       $getRow->delete();
                   }


                return true;

            }
            //return  false;
         }
    }

    public function algorithm()
    {
        $que1 = Queue1::count();
        $que2 = Queue2::count();
        $que3 = Queue3::count();
        $que4 = Queue4::count();
        $que5 = Queue5::count();
        $que6 = Queue6::count();
        $que7 = Queue7::count();
        $que8 = Queue8::count();

        if ($que1 > 10) {
            $firstRow  = Queue1::get()->first();

            $data = [
                'name' => $firstRow->name,
                'email' => $firstRow->email,
                'bitcoin_address' => $firstRow->bitcoin_address,
                'username' => $firstRow->username,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $addRow = Queue2::create($data);
            $Queue1move = Queue1move::create($data);

            $deleteRow = Queue1::whereId($firstRow->id)->limit(1)->delete();
        }
        if($que2 > 10){
            $firstRow  = Queue2::get()->first();

                $data = [
                    'name' => $firstRow->name,
                    'email' => $firstRow->email,
                    'bitcoin_address' => $firstRow->bitcoin_address,
                    'username' => $firstRow->username,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $addRow = Queue3::create($data);
                $Queue1move = Queue2move::create($data);

                $deleteRow = Queue2::whereId($firstRow->id)->delete();
        }
        if($que3 > 10){
            $firstRow  = Queue3::get()->first();

                $data = [
                    'name' => $firstRow->name,
                    'email' => $firstRow->email,
                    'bitcoin_address' => $firstRow->bitcoin_address,
                    'username' => $firstRow->username,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $addRow = Queue4::create($data);
                $Queue1move = Queue3move::create($data);

                $deleteRow = Queue3::whereId($firstRow->id)->delete();
        }
        if($que4 > 10){
            $firstRow  = Queue4::get()->first();

                $data = [
                    'name' => $firstRow->name,
                    'email' => $firstRow->email,
                    'bitcoin_address' => $firstRow->bitcoin_address,
                    'username' => $firstRow->username,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $addRow = Queue5::create($data);
                $Queue1move = Queue4move::create($data);

                $deleteRow = Queue4::whereId($firstRow->id)->delete();
        }
        if($que5 > 10){
            $firstRow  = Queue5::get()->first();

            $data = [
                'name' => $firstRow->name,
                'email' => $firstRow->email,
                'bitcoin_address' => $firstRow->bitcoin_address,
                'username' => $firstRow->username,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $addRow = Queue6::create($data);
            $Queue1move = Queue5move::create($data);

            $deleteRow = Queue5::whereId($firstRow->id)->delete();
        }
        if($que6 > 10){
            $firstRow  = Queue6::get()->first();

            $data = [
                'name' => $firstRow->name,
                'email' => $firstRow->email,
                'bitcoin_address' => $firstRow->bitcoin_address,
                'username' => $firstRow->username,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            $addRow = Queue7::create($data);
            $Queue1move = Queue6move::create($data);

            $deleteRow = Queue6::whereId($firstRow->id)->delete();
        }

        if($que7 > 10){
            $firstRow  = Queue7::get()->first();

                $data = [
                    'name' => $firstRow->name,
                    'email' => $firstRow->email,
                    'bitcoin_address' => $firstRow->bitcoin_address,
                    'username' => $firstRow->username,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $addRow = Queue8::create($data);
                $Queue1move = Queue7move::create($data);

                $deleteRow = Queue7::whereId($firstRow->id)->delete();
        }

        if($que8 > 10){
            $firstRow  = Queue8::get()->first();

                $data = [
                    'name' => $firstRow->name,
                    'email' => $firstRow->email,
                    'bitcoin_address' => $firstRow->bitcoin_address,
                    'username' => $firstRow->username,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];

                $Queue1move = Queue8move::create($data);
                $deleteRow = Queue8::whereId($firstRow->id)->delete();
        }



    }

    public function GetQue($quedata, $que_id)
    {
        for ($i=1; $i <= 8; $i++) {
            if ($que_id == $i) {
                $count =  DB::table('queue'.$i.'s')->count();

                if ($count < 10) {
                    DB::table('queue'.$i.'s')->insert($quedata);
                }  {
                    DB::table('queue'.$i.'s')->insert($quedata);

                    for ($j=1; $j <= 8; $j++) {
                        $count =  DB::table('queue'.$j.'s')->count();

                        var_dump($count);
                    }

                    die();



                    $getRow = DB::table('queue'.$i.'s')->first();

                    $data = [
                        'name' => $getRow->name,
                        'email' => $getRow->email,
                        'bitcoin_address' => $getRow->bitcoin_address,
                        'username' => $getRow->username,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                        ];

                    $j = $i + 1;

                    $addRow = DB::table('queue'. $j .'s')->insert($data);
                    $destroy = DB::table('queue'. $i .'s')->where('id', $getRow->id)->limit(1)->delete();
                }
            }

            return true;
        }
    }



    public function waitmovelist()
    {
        $WaitmoveList = Waitmoved::paginate(20);

        dd($WaitmoveList);

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Waiting::findOrFail($id);
        $destroy->delete();

        return redirect()->route('wait.index')->with('delete', 'Record has been deleted successfully');
    }
}
