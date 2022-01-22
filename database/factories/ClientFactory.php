<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

          //             ID
            // name(string)
            // surname(string)
            // username(string)
            // company_id(bigInt) - skaiciu
            // image_url(string)

         //Faker   
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'username' => $this->faker->userName(),
            // 'company_id' => rand(1,10),
            'company_id' => $this->faker->numberBetween(1,10),
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
