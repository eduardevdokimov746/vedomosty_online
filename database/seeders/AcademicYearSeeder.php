<?php

namespace Database\Seeders;

use App\Models\AcademicYear;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    public function run()
    {
        $academicYears = [
            [
                'id' => 1,
                'name' => '2010-2011'
            ],
            [
                'id' => 2,
                'name' => '2011-2012'
            ],
            [
                'id' => 3,
                'name' => '2012-2013'
            ],
            [
                'id' => 4,
                'name' => '2013-2014'
            ],
            [
                'id' => 5,
                'name' => '2014-2015'
            ],
            [
                'id' => 6,
                'name' => '2015-2016'
            ],
            [
                'id' => 7,
                'name' => '2016-2017'
            ],
            [
                'id' => 8,
                'name' => '2017-2018'
            ],
            [
                'id' => 9,
                'name' => '2018-2019'
            ],
            [
                'id' => 10,
                'name' => '2019-2020'
            ],
            [
                'id' => 11,
                'name' => '2020-2021'
            ],
            [
                'id' => 12,
                'name' => '2021-2022'
            ],
            [
                'id' => 13,
                'name' => '2022-2023'
            ],
            [
                'id' => 14,
                'name' => '2023-2024'
            ]
        ];

        foreach ($academicYears as $academicYear) {
            AcademicYear::on()->updateOrCreate(
                ['id' => $academicYear['id']],
                $academicYear
            );
        }
    }
}
