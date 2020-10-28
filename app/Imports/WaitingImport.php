<?php

namespace App\Imports;

use App\Waiting;
use Maatwebsite\Excel\Concerns\ToModel;

class WaitingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Waiting([
           
                'name'     => $row[0],
                'email'    => $row[1], 
                'bitcoin_address' => $row[2],
                'username' => $row[3],
             
        ]);
    }
}
