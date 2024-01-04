<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class packs extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class, 'packs_services', 'pack_id', 'service_id');
    }
    public function projects()
    {
        return $this->belongsToMany(Project::class,'project_packs', 'pack_id','project_id')
            ->withPivot('quantity');
    }
}
