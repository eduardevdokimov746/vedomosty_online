<?php

namespace Database\Seeders;

use App\Models\GroupDiscipline;
use App\Models\Statement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatementSeeder extends Seeder
{
    public function run()
    {
        $disciplines = GroupDiscipline::on()
            ->select([
                'groups_disciplines.id as gd_id',
                'disciplines.*',
                'courses_groups.*',
                'users_disciplines.user_id',
                'academic_years.name as ay_name'
            ])
            ->join(
                'users_disciplines',
                'groups_disciplines.discipline_id',
                '=',
                'users_disciplines.discipline_id'
            )
            ->join(
                'courses_groups',
                'groups_disciplines.course_group_id',
                '=',
                'courses_groups.id'
            )
            ->join(
                'academic_years',
                'courses_groups.academic_year_id',
                '=',
                'academic_years.id'
            )
            ->join(
                'disciplines',
                'groups_disciplines.discipline_id',
                '=',
                'disciplines.id'
            )
            ->get();


        DB::statement('truncate table statements cascade');
        DB::statement('alter sequence statements_id_seq restart 1');
        DB::statement('alter sequence students_credits_id_seq restart 1');
        DB::statement('alter sequence students_exams_id_seq restart 1');

        foreach ($disciplines as $discipline) {
            $data = [
                'status_id' => $discipline['active'] ? 1 : 2,
                'user_id' => $discipline['user_id'],
                'group_discipline_id' => $discipline['gd_id'],
                'type_id' => $discipline['form_control']
            ];

            if ($discipline['form_control'] === 1) {
                $statementStudents = (new StudentExamSeeder())->run(
                    $discipline['active'],
                    $discipline['group_id'],
                    $discipline['ay_name'],
                    $discipline['semester_id']
                );
            } else {
                $statementStudents = (new StudentCreditSeeder())->run(
                    $discipline['active'],
                    $discipline['group_id'],
                    $discipline['ay_name'],
                    $discipline['semester_id']
                );
            }

            $stat = Statement::create($data);

            if ($discipline['form_control'] === 1) {
                $stat->studentExam()->createMany($statementStudents);
            } else {
                $stat->studentCredit()->createMany($statementStudents);
            }
        }
    }
}
