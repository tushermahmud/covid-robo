<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipent extends Model
{
    protected $table='recipents';
    protected $fillable=['plasma_recipent_name','plasma_recipent_email','plasma_recipent_phone','covid_recipent_verified','plasma_need_verified_doctor','recipent_blood_group','status','hospital_address'];
}
