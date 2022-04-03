<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultiesSeeder extends Seeder
{
    public function run()
    {
        $faculties = [
            [
                'id' => 1,
                'name' => 'Горный факультет',
                'short_name' => 'Горный факультет'
            ],
            [
                'id' => 2,
                'name' => 'Факультет металлургического и машиностроительного производства',
                'short_name' => 'Факультет ММП'
            ],
            [
                'id' => 3,
                'name' => 'Факультет автоматизации и электротехнических систем',
                'short_name' => 'Факультет АЭС'
            ],
            [
                'id' => 4,
                'name' => 'Факультет фундаментального инженерного образования и инноваций',
                'short_name' => 'Факультет ФИОИ'
            ]
        ];

        foreach ($faculties as $faculty) {
            Faculty::on()
                ->updateOrCreate(['id' => $faculty['id']], $faculty);
        }
    }
}
