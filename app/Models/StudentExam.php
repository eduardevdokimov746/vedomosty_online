<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentExam extends Model
{
    use HasFactory;

    protected $table = 'students_exams';

    protected $fillable = [
        'statement_id',
        'student_id',
        'score_date',
        'percent_score',
        'start_total_id',
        'additional_retake_score',
        'additional_retake_date',
        'second_retake_score',
        'second_retake_date',
        'final_total_id',
    ];
}
