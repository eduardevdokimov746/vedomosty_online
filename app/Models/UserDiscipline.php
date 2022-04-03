<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDiscipline extends Model
{
    use HasFactory;

    protected $table = 'users_disciplines';

    protected $fillable = [
        'user_id',
        'discipline_id'
    ];

    public $timestamps = false;
}
