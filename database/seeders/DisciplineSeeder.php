<?php

namespace Database\Seeders;

use App\Models\Discipline;
use Illuminate\Database\Seeder;

class DisciplineSeeder extends Seeder
{
    public function run()
    {
        $disciplines = [
            [
                'name' => 'Иностранный язык',
                'count_credits' => 7,
                'total_hours' => 252,
                'lecture_hours' => null,
                'lab_hours' => null,
                'practice_hours' => 48,
                'form_control' => 3
            ],
            [
                'name' => 'Математика',
                'count_credits' => 10,
                'total_hours' => 504,
                'lecture_hours' => 48,
                'lab_hours' => null,
                'practice_hours' => 48,
                'form_control' => 1
            ],
            [
                'name' => 'Физика',
                'count_credits' => 9,
                'total_hours' => 504,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Информатика',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Физика горных парод',
                'count_credits' => 4,
                'total_hours' => 144,
                'lecture_hours' => 36,
                'lab_hours' => 18,
                'practice_hours' => 18,
                'form_control' => 1
            ],
            [
                'name' => 'Философия',
                'count_credits' => 3,
                'total_hours' => 108,
                'lecture_hours' => 36,
                'lab_hours' => null,
                'practice_hours' => 18,
                'form_control' => 2
            ],
            [
                'name' => 'Оформление технической документации',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Системное программирование',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 2
            ],
            [
                'name' => 'Технологии проектирования компьютерных сетей',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Экономика',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Метрология',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 2
            ],
            [
                'name' => 'Экология',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 3
            ],
            [
                'name' => 'Сопротивление металлов',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 2
            ],
            [
                'name' => 'Физическая культура',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 3
            ],
            [
                'name' => 'Компьютерная графика',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 3
            ],
            [
                'name' => 'История',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 2
            ],
            [
                'name' => 'Проектно-сметное дело',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
            [
                'name' => 'Электроснабжение горных предприятий',
                'count_credits' => 6,
                'total_hours' => 216,
                'lecture_hours' => 32,
                'lab_hours' => 16,
                'practice_hours' => 16,
                'form_control' => 1
            ],
        ];

        Discipline::on()->delete();

        $id = 1;
        foreach (range(1,16) as $departamentId) {
            foreach (range(1,9) as $semesterId) {
                $countDisciplines = 10;
                while ($countDisciplines > 0) {
                    $discipline = $disciplines[mt_rand(0, count($disciplines) - 1)];
                    $discipline['departament_id'] = $departamentId;
                    $discipline['semester_id'] = $semesterId;

                    Discipline::on()
                        ->updateOrCreate(
                            ['id' => $id],
                            $discipline
                        );

                    $id++;

                    $countDisciplines--;
                }
            }
        }
    }
}
