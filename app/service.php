<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $fillable = [
        'designation',
        'prix',
        
    ];
    public function packs()
    {
       return $this->belongsToMany(packs::class, 'packs_services', 'service_id ', 'pack_id');
    }
    public function projects()
    {
        return $this->belongsToMany(project::class, 'project_client_pack_services', 'service_id', 'project_id');

    }
}
