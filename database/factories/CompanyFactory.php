<?php

namespace Database\Factories;

use App\Models\Company; 
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email' => $this->faker->companyEmail,
            'logo' => $this->faker->imageUrl(100, 100),
            'website' => $this->faker->url,
        ];
    }
}
