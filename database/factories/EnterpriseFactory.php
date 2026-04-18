<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EnterpriseFactory extends Factory
{
    public function definition(): array
    {
        return array(
			"name" => $this->faker->regexify("[A-Z]{16}"),
			"worker_amount" => $this->faker->randomNumber(1, 60)
        );
    }
}