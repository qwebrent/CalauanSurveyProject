<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = ['job_type','position','year_from','year_to','res_id',];

    public function resident(){
        return $this->belongsTo(Resident::class, 'unique_id');
    }
}
