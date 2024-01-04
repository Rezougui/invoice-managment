<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    public function client()
    {
        return $this->belongsTo(client::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class, 'project_services', 'project_id', 'service_id');

    }
    public function packs()
    {
        return $this->belongsToMany(packs::class,'project_packs','project_id', 'pack_id')
            ->withPivot('quantity');
    }
}