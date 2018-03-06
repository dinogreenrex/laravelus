<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    //
    public function items()
    {
        $this->belongsToMany("App\Clients","items_clients",
            "clientsid","itemsid");
    }
}
