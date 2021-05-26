<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $fillable = ['unique_id','yearnow','image','fname','mname','lname','job_status','block','lot','street','barangay','municipality','province','birthplace','birthday','gender','civil_status','citizenship','email','religion','height','weight','blood_type','voters_id','contact_no','business_name','monthly_income','sfname','smname','slname','sbirthday','surveyor',];

    public function getFullName(){
        return $this->lname . ' '. $this->fname .' '. $this->mname;
    }
    
    public function education(){
        return $this->hasOne(EducationalAttainment::class, 'res_id', 'unique_id');
    }

    public function household(){
        return $this->hasOne(Household::class, 'res_id', 'unique_id');
    }

    public function experiences(){
        return $this->hasMany(WorkExperience::class, 'res_id', 'unique_id');
    }

    public function relatives(){
        return $this->hasMany(Relative::class, 'res_id', 'unique_id');
    }
}
