<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Queue7 extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'email', 'bitcoin_address','username','method'];
}
