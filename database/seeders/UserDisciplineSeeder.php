<?php

namespace Database\Seeders;

use App\Models\Discipline;
use App\Models\User;
use App\Models\UserDiscipline;
use Illuminate\Database\Seeder;

class UserDisciplineSeeder extends Seeder
{
    public function run()
    {
        $disciplines = Discipline::pluck('id');
        $users = User::pluck('id');

        UserDiscipline::on()->delete();

        $countDisciplines = $disciplines->count();
        $currentDiscipline = 0;

        while ($countDisciplines > 0) {
            $data = [];
            foreach ($users as $user) {
                if ($countDisciplines == 0)
                    break;

                $data[] = [
                    'user_id' => $user,
                    'discipline_id' => $disciplines[$currentDiscipline]
                ];
                $currentDiscipline++;
                $countDisciplines--;
            }
            UserDiscipline::insert($data);
        }
    }
}
