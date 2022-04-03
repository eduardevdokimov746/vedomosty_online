<?php

namespace Database\Seeders;

use App\Models\StatementType;
use Illuminate\Database\Seeder;

class StatementTypeSeeder extends Seeder
{
    public function run()
    {
        $statementTypes = [
            [
                'id' => 1,
                'name' => 'Экзамен'
            ],
            [
                'id' => 2,
                'name' => 'Зачет'
            ],
            [
                'id' => 3,
                'name' => 'Диф.зачет'
            ]
        ];

        foreach ($statementTypes as $statementType) {
            StatementType::on()->updateOrCreate(
                ['id' => $statementType['id']],
                $statementType
            );
        }
    }
}
