<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    public function run()
    {
        $semesters = [
            [
                'id' => 1,
                'name' => 'Семестр 1',
                'course_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Семестр 2',
                'course_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Семестр 3',
                'course_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'Семестр 4',
                'course_id' => 2
            ],
            [
                'id' => 5,
                'name' => 'Семестр 5',
                'course_id' => 3
            ],
            [
                'id' => 6,
                'name' => 'Семестр 6',
                'course_id' => 3
            ],
            [
                'id' => 7,
                'name' => 'Семестр 7',
                'course_id' => 4
            ],
            [
                'id' => 8,
                'name' => 'Семестр 8',
                'course_id' => 4
            ],
            [
                'id' => 9,
                'name' => 'Семестр 9',
                'course_id' => 5
            ],
            [
                'id' => 10,
                'name' => 'Семестр 10',
                'course_id' => 5
            ],
            [
                'id' => 11,
                'name' => 'Семестр 11',
                'course_id' => 6
            ],
            [
                'id' => 12,
                'name' => 'Семестр 12',
                'course_id' => 6
            ],
        ];

        foreach ($semesters as $semester) {
            Semester::on()->updateOrCreate(
                ['id' => $semester['id']],
                $semester
            );
        }
    }
}
