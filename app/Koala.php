<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koala extends Model
{
    protected $table = "person";
    public $timestamps = false;
    protected $fillable = ['fname', 'lname'.'height', 'kilograms'];
}
