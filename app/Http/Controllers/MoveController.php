<?php

namespace App\Http\Controllers;

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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoveController extends Controller
{

    public function move(Request $request)
    {

       $process =  $this->Process($request->que_id, $request->id, $request->url);
      // $this->algorithm();
       return redirect()->back()->with('success', 'list as been moved to Queue');

    }

    public function Process($que_id,$id,$url)
    {


        for ($i=2; $i <= 8 ; $i++) {

            if ($que_id == $i) {

//                if($que_id == 2){
//                    $getRow = Queue1::findOrFail($id);
//                } else if($que_id == 3){
//                    $getRow = Queue2::findOrFail($id);
//                }else if ($que_id == 4) {
//                    $getRow = Queue3::findOrFail($id);
//                }else if($que_id == 5){
//                    $getRow = Queue4::findOrFail($id);
//                }else if($que_id == 6){
//                    $getRow = Queue5::findOrFail($id);
//                }else if($que_id == 7){
//                    $getRow = Queue6::findOrFail($id);
//                }else if($que_id == 8){
//                    $getRow = Queue7::findOrFail($id);
//                }

                preg_match_all('!\d+\.*\d*!', $url, $matches);
                $url = collect($matches)->flatten(1);

                $getRow  =  DB::table('queue'. $url[0] .'s')->where('id', $id)->first();


                $qdata = [
                      'name' => $getRow->name,
                      'email' => $getRow->email,
                      'bitcoin_address' => $getRow->bitcoin_address,
                      'username' => $getRow->username,
                      'created_at' => Carbon::now(),
                      'updated_at' => Carbon::now(),
                      'method' => 'Investment',

                  ];

                 $qu = 'queue'. $url[0] .'moves';

                $insert = DB::table('queue'.$i.'s')->insert($qdata);
                $move  =  DB::table($qu)->insert($qdata);

//                if($que_id == 2){
//                    $move = Queue1move::create($qdata);
//                } else if($que_id == 3){
//                    $move = Queue2move::create($qdata);
//                }else if ($que_id == 4) {
//                    $move = Queue3move::create($qdata);
//                }else if($que_id == 5){
//                    $move = Queue4move::create($qdata);
//                }else if($que_id == 6){
//                    $move = Queue5move::create($qdata);
//                }else if($que_id == 7){
//                    $move = Queue6move::create($qdata);
//                }else if($que_id == 8){
//                    $move = Queue7move::create($qdata);
//                }

                   if ($move) {
                       DB::table('queue'. $url[0] .'s')->where('id', $id)->delete();
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
}
