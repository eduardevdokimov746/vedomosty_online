<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Statement extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_id',
        'user_id',
        'type_id',
        'group_discipline_id',
        'great_percent',
        'good_percent',
        'satisfactorily_percent',
        'not_satisfactorily_percent'
    ];

    public $timestamps = true;

    public function studentExam(): HasMany
    {
        return $this->hasMany(StudentExam::class);
    }

    public function studentCredit(): HasMany
    {
        return $this->hasMany(StudentCredit::class);
    }
}
