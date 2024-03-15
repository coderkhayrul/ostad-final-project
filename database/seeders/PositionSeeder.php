<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $position = [
            [
                'name' => $name = 'Web Developer',
                'slug' => Str::slug($name),
                'remarks' => 'Web Developer',
            ],
            [
                'name' => $positionName = 'Web Designer',
                'slug' => Str::slug($positionName),
                'remarks' => 'Web Designer',
            ],
        ];

        foreach ($position as $data) {
            Position::create($data);
        }
    }
}
