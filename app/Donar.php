<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donar extends Model
{
    protected $table='donars';
    protected $fillable=['plasma_donar_name','plasma_donar_email','plasma_donar_phone','covid_verified','covid_recovered','donar_blood_group','status'];
}
