<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    public function run()
    {
        $departaments = self::get();

        foreach ($departaments as $departament) {
            Departament::on()
                ->updateOrCreate(['id' => $departament['id']], $departament);
        }
    }

    public static function get(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'Кафедра разработки месторождений полезных ископаемых',
                'short_name' => 'РМПИ',
                'faculty_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'Кафедра строительных геотехнологий',
                'short_name' => 'СТ',
                'faculty_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'Кафедра маркшейдерии, геодезии и геологии',
                'short_name' => 'МГГ',
                'faculty_id' => 1
            ],
            [
                'id' => 4,
                'name' => 'Кафедра охраны труда и промышленной безопасности',
                'short_name' => 'ОТПБ',
                'faculty_id' => 1
            ],
            [
                'id' => 5,
                'name' => 'Кафедра технологии и организации машиностроительного производства',
                'short_name' => 'ТОМП',
                'faculty_id' => 2
            ],
            [
                'id' => 6,
                'name' => 'Кафедра машин металлургического комплекса',
                'short_name' => 'ММК',
                'faculty_id' => 2
            ],
            [
                'id' => 7,
                'name' => 'Кафедра горной энергомеханики и оборудования',
                'short_name' => 'ГЭО',
                'faculty_id' => 2
            ],
            [
                'id' => 8,
                'name' => 'Кафедра металлургии черных металлов',
                'short_name' => 'МЧМ',
                'faculty_id' => 2
            ],
            [
                'id' => 9,
                'name' => 'Кафедра радиофизики',
                'short_name' => 'Радиофизика',
                'faculty_id' => 3
            ],
            [
                'id' => 10,
                'name' => 'Кафедра автоматизированного управления технологическими процессами',
                'short_name' => 'АУТП',
                'faculty_id' => 3
            ],
            [
                'id' => 11,
                'name' => 'Кафедра специализированных компьютерных систем',
                'short_name' => 'СКС',
                'faculty_id' => 3
            ],
            [
                'id' => 12,
                'name' => 'Кафедра высшей математики',
                'short_name' => 'ВМ',
                'faculty_id' => 4
            ],
            [
                'id' => 13,
                'name' => 'Кафедра инженерной механики и строительства',
                'short_name' => 'ИМС',
                'faculty_id' => 4
            ],
            [
                'id' => 14,
                'name' => 'Кафедра экономики и управления',
                'short_name' => 'ЭИ',
                'faculty_id' => 4
            ],
            [
                'id' => 15,
                'name' => 'Кафедра языковой подготовки специалистов',
                'short_name' => 'ЯПС',
                'faculty_id' => 4
            ],
            [
                'id' => 16,
                'name' => 'Кафедра информационных технологий',
                'short_name' => 'ИТ',
                'faculty_id' => 4
            ],
        ];
    }
}
