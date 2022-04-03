<?php

namespace Database\Seeders;

use App\Models\Total;
use Illuminate\Database\Seeder;

class TotalSeeder extends Seeder
{
    public function run()
    {
        $totals = [
            [
                'id' => 1,
                'name' => 'Отлично',
                'short_name' => 'отл'
            ],
            [
                'id' => 2,
                'name' => 'Хорошо',
                'short_name' => 'хор'
            ],
            [
                'id' => 3,
                'name' => 'Удовлетворительно',
                'short_name' => 'удовл'
            ],
            [
                'id' => 4,
                'name' => 'Неудовлетворительно',
                'short_name' => 'неудовл'
            ],
        ];

        foreach ($totals as $total) {
            Total::on()->updateOrCreate(
                ['id' => $total['id']],
                $total
            );
        }
    }
}
