<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['start_date', 'finish_date', 'doctor_id', 'patient_id', 'treatment_tip'];

    protected $hidden = ['created_at', 'updated_at'];
}
