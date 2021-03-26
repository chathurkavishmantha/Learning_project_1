<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'user_id',
        'user_name',
        'subject_name',
        'subject_code',
    ];
}
