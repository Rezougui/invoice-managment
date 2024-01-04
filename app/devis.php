<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devis extends Model
{
    public function project()
    {
        return $this->belongsToMany(project::class, 'devis_projects', 'devis_id', 'project_id');
    }
}
