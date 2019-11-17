<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['patient_id', 'treatment_type_id', 'doctor_id', 'price'];
    protected $hidden = ['updated_at'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
