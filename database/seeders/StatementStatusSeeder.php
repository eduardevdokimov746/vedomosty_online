<?php

namespace Database\Seeders;

use App\Models\StatementStatus;
use Illuminate\Database\Seeder;

class StatementStatusSeeder extends Seeder
{
    public function run()
    {
        $statementStatuses = [
            [
                'id' => 1,
                'name' => 'Открыта'
            ],
            [
                'id' => 2,
                'name' => 'Закрыта'
            ]
        ];

        foreach ($statementStatuses as $statementStatus) {
            StatementStatus::on()->updateOrCreate(
                ['id' => $statementStatus['id']],
                $statementStatus
            );
        }
    }
}
