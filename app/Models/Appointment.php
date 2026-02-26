<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'age_group',
        // 'doctor_name',
        'service_name',
        // 'preferred_date',
        // 'preferred_time',
        // 'additional_info',
        'status'
    ];
}
