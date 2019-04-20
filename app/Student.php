<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $fillable = ['name','reg_no','roll_no','course','email','phone'];
}
