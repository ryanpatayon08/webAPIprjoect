<?php

namespace Database\Factories;

use App\Models\AirPlaneFlight;
use Illuminate\Database\Eloquent\Factories\Factory;

class AirPlaneFlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AirPlaneFlight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'plane_name' => $this->faker->word,
        'destination' => $this->faker->word,
        'date_time_of_arrival' => $this->faker->date('Y-m-d H:i:s'),
        'date_time_of_departure' => $this->faker->date('Y-m-d H:i:s'),
        'ticket_price' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
