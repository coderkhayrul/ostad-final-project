<?php

namespace Database\Seeders;

use App\Models\JobType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobTypes = [
            'Full-time',
            'Part-time',
            'Contract',
            'Temporary',
            'Internship',
            'Commission',
            'Volunteer',
        ];

        foreach ($jobTypes as $jobType) {
            JobType::create([
                'name' => $jobType,
                'slug' => Str::slug($jobType)
            ]);
        }
    }
}
