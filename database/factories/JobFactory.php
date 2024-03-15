<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\JobType;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 2,
            'category_id' => Category::select('id')->inRandomOrder()->first()->id,
            'job_type_id' => JobType::select('id')->inRandomOrder()->first()->id,
            'position_id' => Position::select('id')->inRandomOrder()->first()->id,
            'title' => $title = $this->faker->jobTitle,
            'slug' => Str::slug($title),
            'expireDate' => $this->faker->dateTimeBetween('now')->format('m-d-Y'),
            'salaryType' => $this->faker->randomElement(['hourly', 'Monthly', 'yearly']),
            'minSalary' => $this->faker->numberBetween(1000, 10000),
            'maxSalary' => $this->faker->numberBetween(10000, 100000),
            'currency' => $this->faker->randomElement(['USD', 'EUR', 'GBP']),
            'country' => $this->faker->country,
            'address' => $this->faker->address,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'experience' => $this->faker->randomElement(['1 Years', '2 Years', '3 Years', '4 Years', '5 Years']),
            'qualification' => $this->faker->randomElement(['Bachelors', 'Masters', 'Phd']),
            'description' => $this->faker->paragraph,
        ];
    }
}
