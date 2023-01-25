<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
            'employee_id',
            'leave_type',
            'reason_for_leave',
            'start_date',
            'end_date'
    ];
}
