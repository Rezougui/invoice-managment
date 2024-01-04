<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
    public function project() {
        return $this->belongsTo('App\Project', 'idprojet');
    }
    public function gerer()
    {
        return view('factures.gerer');
    }
}
