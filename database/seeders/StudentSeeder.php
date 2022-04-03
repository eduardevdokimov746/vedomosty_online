<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $countStudents = 20;
        $startStudentId = 1;
        $endStudentId = 20;

        foreach (range(1, 15) as $groupId) {
            foreach (range($startStudentId, $endStudentId) as $studentId) {
                $student = Student::factory()
                    ->make([
                        'id' => $studentId,
                        'group_id' => $groupId
                    ]);

                Student::on()
                    ->updateOrCreate(['id' => $studentId], $student->toArray());
            }

            $startStudentId += $countStudents;
            $endStudentId += $countStudents;
        }
    }
}
