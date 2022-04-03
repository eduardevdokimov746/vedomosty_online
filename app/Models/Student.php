<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'patronymic',
        'birth_date',
        'record_book_number',
        'group_id'
    ];

    public $timestamps = false;
}
