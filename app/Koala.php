<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Koala extends Model
{
    protected $table = "koalas";
    public $timestamps = false;
    protected $fillable = ['name'];
}
