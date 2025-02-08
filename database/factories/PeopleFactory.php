<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\School;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'grade' => $this->faker->randomDigit(),
            'bio' => $this->faker->text(),
            'email' => $this->faker->email(),
            'school_id' => School::inRandomOrder(   1)->first()->id
        ];
    }
}
