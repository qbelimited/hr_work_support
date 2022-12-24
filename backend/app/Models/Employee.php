<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
                    'fname',
                    'mname',
                    'lname',
                    'birthdate',
                    'gender',
                    'address',
                    'department',
                    'jobtitle',
                    'employee_id',
                    'bank_acc_no',
                    'country',
                    'city',
                    'mobile_phone',
                    'work_phone',
                    'work_email',
                    'private_email',
                    'supervisor',
                    'indirect_supervisor',
                    'status'
    ];
}
