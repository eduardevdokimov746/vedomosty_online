<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(FacultiesSeeder::class);
        $this->call(DepartamentSeeder::class);
        $this->call(CourseSeeder::class);
        $this->call(SemesterSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(AcademicYearSeeder::class);
        $this->call(CourseGroupSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(StatementTypeSeeder::class);
        $this->call(DisciplineSeeder::class);
        $this->call(GroupDisciplineSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StatementStatusSeeder::class);
        $this->call(TotalSeeder::class);
        $this->call(UserDisciplineSeeder::class);
        $this->call(StatementSeeder::class);
    }
}
