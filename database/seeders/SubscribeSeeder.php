<?php

namespace Database\Seeders;

use App\Models\Subscribe;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscribes = [
            [
                'email' => 'aysha@mail.com',
            ],
            [
                'email' => 'robin@mail.com',
            ],
            [
                'email' => 'sifa@mail.com',
            ],
        ];

        foreach ($subscribes as $subscribe) {
            Subscribe::create($subscribe);
        }
    }
}
