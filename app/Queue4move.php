<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Queue4move extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['name', 'email', 'bitcoin_address','username','method'];
}
