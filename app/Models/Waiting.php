<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Waiting extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'email', 'bitcoin_address','username','method','transaction_id','selected_queue'];



    public function ProcessData()
    {
        $path = resource_path('process/*.csv');
        
         $g = glob($path);

          foreach (array_slice($g, 0, 1) as $file) {
              
               $data = array_map('str_getcsv', file($file));
          }
    }
}
