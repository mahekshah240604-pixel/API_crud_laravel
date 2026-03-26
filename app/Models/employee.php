<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    protected $primaryKey = 'employee_id';
    protected $fillable = [
        'emp_name',
        'emp_mobile',
    ];
}
