<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use FormAccessible;

    protected $fillable = ['name','model','serial', 'parameters'];

    public $timestamps = false;

    public function clients(){
        $this->belongsToMany('App\Clients', 'items_clients',
            'itemsid','clientsid');
    }
}
