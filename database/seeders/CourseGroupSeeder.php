<?php

namespace Database\Seeders;

use App\Models\CourseGroup;
use Illuminate\Database\Seeder;

class CourseGroupSeeder extends Seeder
{
    public function run()
    {
        $groups = GroupSeeder::get();

        $id = 1;
        foreach ($groups as $group) {
            preg_match('#\W+-(?<year>\d+)#', $group['name'], $m);
            $year = $m['year'];

            switch ($year) {
                case(17):
                    $this->create17($group['id'], $id);
                    break;
                case(18):
                    $this->create18($group['id'], $id);
                    break;
                case(19):
                    $this->create19($group['id'], $id);
                    break;
                case(20):
                    $this->create20($group['id'], $id);
                    break;
                case(21):
                    $this->create21($group['id'], $id);
                    break;
            }
        }
    }

    protected function create17($groupId, int &$id)
    {
        $data = [
            [
                'course_id' => 1,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 8
            ],
            [
                'course_id' => 2,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 9
            ],
            [
                'course_id' => 3,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 10
            ],
            [
                'course_id' => 4,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 11
            ],
            [
                'course_id' => 5,
                'group_id' => $groupId,
                'active' => true,
                'academic_year_id' => 12
            ],
        ];

        foreach ($data as $item) {
            CourseGroup::on()->updateOrCreate(
                ['id' => $id],
                $item
            );
            $id++;
        }
    }

    protected function create18($groupId, int &$id)
    {
        $data = [
            [
                'course_id' => 1,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 9
            ],
            [
                'course_id' => 2,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 10
            ],
            [
                'course_id' => 3,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 11
            ],
            [
                'course_id' => 4,
                'group_id' => $groupId,
                'active' => true,
                'academic_year_id' => 12
            ],
        ];

        foreach ($data as $item) {
            CourseGroup::on()->updateOrCreate(
                ['id' => $id],
                $item
            );
            $id++;
        }
    }

    protected function create19($groupId, int &$id)
    {
        $data = [
            [
                'course_id' => 1,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 10
            ],
            [
                'course_id' => 2,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 11
            ],
            [
                'course_id' => 3,
                'group_id' => $groupId,
                'active' => true,
                'academic_year_id' => 12
            ]
        ];

        foreach ($data as $item) {
            CourseGroup::on()->updateOrCreate(
                ['id' => $id],
                $item
            );
            $id++;
        }
    }

    protected function create20($groupId, int &$id)
    {
        $data = [
            [
                'course_id' => 1,
                'group_id' => $groupId,
                'active' => false,
                'academic_year_id' => 11
            ],
            [
                'course_id' => 2,
                'group_id' => $groupId,
                'active' => true,
                'academic_year_id' => 12
            ]
        ];

        foreach ($data as $item) {
            CourseGroup::on()->updateOrCreate(
                ['id' => $id],
                $item
            );
            $id++;
        }
    }

    protected function create21($groupId, int &$id)
    {
        $data = [
            [
                'course_id' => 1,
                'group_id' => $groupId,
                'active' => true,
                'academic_year_id' => 12
            ]
        ];

        foreach ($data as $item) {
            CourseGroup::on()->updateOrCreate(
                ['id' => $id],
                $item
            );
            $id++;
        }
    }
}
