<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\course;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'thumb' => $this->faker->imageUrl,
            'has_batch' => $this->faker->randomElement([0, 1]),
            'category' => $this->faker->randomElement(['1', '2', '3', '5']),
            'description' => $this->faker->paragraph,
            'feature' => $this->faker->paragraph(5),
            'target' => $this->faker->paragraph(5),
            'outcome' => $this->faker->paragraph(5),
            'instructor' => $this->faker->randomElement(User::pluck("id")->toArray()),
            'type' => $this->faker->randomElement(["free", "paid"]),
            'slug' => $this->faker->slug,
            'price' => $this->faker->randomFloat([2, 10, 100]),
        ];
    }
}
