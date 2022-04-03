<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupDiscipline extends Model
{
    use HasFactory;

    protected $table = 'groups_disciplines';

    protected $fillable = [
        'course_group_id',
        'discipline_id'
    ];

    public $timestamps = false;
}
