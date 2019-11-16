<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment_type extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['name', 'type'];
}
