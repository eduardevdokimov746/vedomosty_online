<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::statement('TRUNCATE TABLE users CASCADE');

        User::on()
            ->updateOrCreate(
                ['id' => 1],
                User::factory()->makeOne([
                    'id' => 1,
                    'role_id' => 1,
                    'login' => 'admin'
                ])->toArray()
            );

        foreach (range(2, 90) as $userId) {
            User::on()
                ->updateOrCreate(
                    ['id' => $userId],
                    User::factory()->makeOne(['id' => $userId, 'role_id' => 2])->toArray()
                );
        }
    }
}
