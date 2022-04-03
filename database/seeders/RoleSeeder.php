<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'admin',
                'description' => 'Администратор'
            ],
            [
                'id' => 2,
                'name' => 'teacher',
                'description' => 'Преподаватель'
            ]
        ];

        foreach ($roles as $role) {
            Role::on()->updateOrCreate(
                ['id' => $role['id']],
                $role
            );
        }
    }
}
