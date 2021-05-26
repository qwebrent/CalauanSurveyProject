<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relative extends Model
{
    protected $fillable = ['full_name','birthday','relationship','res_id'];

    public function resident(){
        return $this->belongsTo(Resident::class, 'unique_id');
    }
}
