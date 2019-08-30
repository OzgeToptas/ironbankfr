<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
	protected $fillable = ['fname','lname','email','telnumber','gender','dob','finalcomment'];
    //
}
