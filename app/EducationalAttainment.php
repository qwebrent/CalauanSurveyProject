<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EducationalAttainment extends Model
{
    protected $fillable = ['school_name','school_address','course','level','school_year','res_id'];

    public function resident(){

        return $this->belongsTo(Resident::class, 'unique_id');
        
    }
}
