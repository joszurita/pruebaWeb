<?php

namespace Database\Factories;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeopleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = People::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nameUser'=>$this->faker->name,
            'nameComplete'=>$this->faker->name,
            'email'=>$this->faker->name,
            'number'=>$this->faker->name,
            'age'=>$this->faker->name,
            'dayBirthday'=>$this->faker->name,
            'configuration_id' =>$this->faker->name
        ];
    }
}
