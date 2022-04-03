<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run()
    {
        $courses = [
            [
                'id' => 1,
                'name' => 'Курс 1'
            ],
            [
                'id' => 2,
                'name' => 'Курс 2'
            ],
            [
                'id' => 3,
                'name' => 'Курс 3'
            ],
            [
                'id' => 4,
                'name' => 'Курс 4'
            ],
            [
                'id' => 5,
                'name' => 'Курс 5'
            ],
            [
                'id' => 6,
                'name' => 'Курс 6'
            ]
        ];

        foreach ($courses as $course) {
            Course::on()
                ->updateOrCreate(['id' => $course['id']], $course);
        }
    }
}
