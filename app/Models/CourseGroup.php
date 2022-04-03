<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseGroup extends Model
{
    use HasFactory;

    protected $table = 'courses_groups';

    protected $fillable = [
        'course_id',
        'group_id',
        'academic_year_id',
        'active',
    ];

    public $timestamps = false;
}
