<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        $fullName = explode(' ', $this->faker->name());
        $firstName = $fullName[1];
        $patronymic = $fullName[2];
        $lastName = $fullName[0];

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'patronymic' => $patronymic,
            'login' => $this->faker->unique()->regexify('example-[1-9]+'),
            'password' => password_hash('123', PASSWORD_DEFAULT),
            'email' => $this->faker->unique()->email,
            'number_phone' => $this->faker->unique()->e164PhoneNumber
        ];
    }
}
