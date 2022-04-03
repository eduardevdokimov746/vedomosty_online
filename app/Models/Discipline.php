<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discipline extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'departament_id',
        'semester_id',
        'study_hours',
        'count_credits',
        'total_hours',
        'lecture_hours',
        'lab_hours',
        'practice_hours',
        'form_control'
    ];

    public $timestamps = false;
}
