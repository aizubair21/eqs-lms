<?php

namespace Database\Factories;

use App\Models\course_module;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\moduleContent>
 */
class ModuleContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "title" => $this->faker->title(),
            "type" => $this->faker->randomElement(["youtube", "locak", "gdrive"]),
            "description" => $this->faker->paragraph(5),
            "content" => "youtube ",
            "status" => $this->faker->randomElement([1, 0]),
            "module_id" => $this->faker->randomNumber(course_module::pluck("id")->toArray()),
        ];
    }
}
