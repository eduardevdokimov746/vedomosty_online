<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCredit extends Model
{
    use HasFactory;

    protected $table = 'students_credits';

    protected $fillable = [
        'statement_id',
        'student_id',
        'first_checkout_date',
        'first_checkout_lecture_percent',
        'first_checkout_practice_percent',
        'first_checkout_lab_percent',
        'first_checkout_passes',
        'first_checkout_total_percent',
        'second_checkout_date',
        'second_checkout_lecture_percent',
        'second_checkout_practice_percent',
        'second_checkout_lab_percent',
        'second_checkout_passes',
        'second_checkout_total_percent',
        'increment_percent',
        'total_percent',
        'total_id',
        'is_credit'
    ];
}
