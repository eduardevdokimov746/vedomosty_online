<?php

namespace Database\Seeders;

use App\Models\CourseGroup;
use App\Models\GroupDiscipline;
use Illuminate\Database\Seeder;

class GroupDisciplineSeeder extends Seeder
{
    public function run()
    {
        GroupDiscipline::on()->delete();

        $courseDisciplines = CourseGroup::on()
            ->select([
                'courses_groups.id as course_group_id',
                'disciplines.id as discipline_id'
            ])
            ->join(
                'semesters',
                'courses_groups.course_id',
                '=',
                'semesters.course_id'
            )
            ->join(
                'disciplines',
                'semesters.id',
                '=',
                'disciplines.semester_id'
            )
            ->join(
                'groups',
                'courses_groups.group_id',
                '=',
                'groups.id'
            )
            ->whereRaw('disciplines.departament_id = groups.departament_id')
            ->get();

        foreach ($courseDisciplines->chunk(50) as $courseDiscipline) {
            $data = [];
            foreach ($courseDiscipline as $item) {
                $data[] = [
                    'course_group_id' => $item['course_group_id'],
                    'discipline_id' => $item['discipline_id']
                ];
            }
            GroupDiscipline::insert($data);
        }
    }
}
