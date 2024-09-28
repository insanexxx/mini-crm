<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'company_id' => Company::inRandomOrder()->first()->id, // Связь с фабрикой компаний
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
