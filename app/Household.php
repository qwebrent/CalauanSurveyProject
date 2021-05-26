<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    protected $fillable = ['yearnow','owner','lot','street','purok','barangay','municipality','province','date_reg','res_id',];

    public function resident(){
        return $this->belongsTo(Resident::class, 'unique_id');
    }
}
