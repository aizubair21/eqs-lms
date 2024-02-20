<?php

namespace Database\Factories;

use App\Models\course;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\course_module;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course_module>
 */
class course_moduleFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = course_module::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //use faker to create data
            // "id" => $this->faker->unique()->randomNumber(),
            'title' => $this->faker->sentence(5),
            'name' => $this->faker->name(),
            'type' => $this->faker->randomElement(["paid", "free"]),
            'course_id' => $this->faker->randomElement(course::pluck("id")->toArray()),
            // 'created_at' => $this->faker->dateTimeBetween('-2 years', '-1 year'),
            // 'updated_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
