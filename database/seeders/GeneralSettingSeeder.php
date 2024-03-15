<?php

namespace Database\Seeders;

use App\Models\GeneralSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneralSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GeneralSetting::create([
            'site_title' => 'Job Portal',
            'site_email' => 'jobportal@gmail.com',
            'site_phone' => '01835061968',
            'site_fax' => '01245785451',
            'site_url' => 'jobportal.com',
            'site_author' => 'Khayrul Islam Shanto',
            'site_address' => 'Shukrabad, Dhanmondi, Dhaka',
            'site_footer' => '©Copyright 2024 Jobber All Rights Reserved',
            'site_description' => 'Jobber All Rights Reserved',
        ]);
    }
}
