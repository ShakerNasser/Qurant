<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = [
        'employee_name', 'start_date', 'end_date', 'reason'
    ];
}