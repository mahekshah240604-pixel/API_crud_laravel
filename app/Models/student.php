<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_name',
        'student_mobile'
    ];
}
