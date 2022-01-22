<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             // // ID
            // name(string)
            // type(insignedBigInt)
            // description(string)

            'name' => $this->faker->company(),
            'type_id' => rand(1,4),
            'description' => $this->faker->paragraph(15)
        ];
    }
}
