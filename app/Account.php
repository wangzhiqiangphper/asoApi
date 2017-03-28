<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = ['account','password','country','q1','q2','q3','a1','a2','a3','udid','serialNumber','deviceType'];
    public $timestamps = false;
}
