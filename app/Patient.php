<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $hidden = [
        'updated_at',
    ];
}
