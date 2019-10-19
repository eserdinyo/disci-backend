<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['start', 'end', 'title', 'class'];

    protected $hidden = ['created_at', 'updated_at'];
}
