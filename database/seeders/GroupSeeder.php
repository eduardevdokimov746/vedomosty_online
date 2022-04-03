<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    public function run()
    {
        $groups = self::get();

        foreach ($groups as $group) {
            Group::on()
                ->updateOrCreate(['id' => $group['id']], $group);
        }
    }

    public static function get(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'РМПИ-20',
                'departament_id' => 1
            ],
            [
                'id' => 2,
                'name' => 'РМПИ-21',
                'departament_id' => 1
            ],
            [
                'id' => 3,
                'name' => 'СГ-19',
                'departament_id' => 2
            ],
            [
                'id' => 4,
                'name' => 'ОТПБ-19',
                'departament_id' => 4
            ],
            [
                'id' => 5,
                'name' => 'ОТПБ-20',
                'departament_id' => 4
            ],
            [
                'id' => 6,
                'name' => 'ОТПБ-21',
                'departament_id' => 4
            ],
            [
                'id' => 7,
                'name' => 'МЧМ-18',
                'departament_id' => 8
            ],
            [
                'id' => 8,
                'name' => 'МЧМ-19',
                'departament_id' => 8
            ],
            [
                'id' => 9,
                'name' => 'МЧМ-20',
                'departament_id' => 8
            ],
            [
                'id' => 10,
                'name' => 'МЧМ-21',
                'departament_id' => 8
            ],
            [
                'id' => 11,
                'name' => 'СКС-17',
                'departament_id' => 11
            ],
            [
                'id' => 12,
                'name' => 'СКС-18',
                'departament_id' => 11
            ],
            [
                'id' => 13,
                'name' => 'СКС-19',
                'departament_id' => 11
            ],
            [
                'id' => 14,
                'name' => 'СКС-20',
                'departament_id' => 11
            ],
            [
                'id' => 15,
                'name' => 'СКС-21',
                'departament_id' => 11
            ]
        ];
    }
}
