<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        $fullName = explode(' ', $this->faker->name());
        $firstName = $fullName[0];
        $patronymic = $fullName[1];
        $lastName = $fullName[2];

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'patronymic' => $patronymic,
            'birth_date' => $this->faker->dateTimeBetween('-40 years', '-18 years')->format('Y-m-d'),
            'record_book_number' => $this->faker->creditCardNumber
        ];
    }
}
