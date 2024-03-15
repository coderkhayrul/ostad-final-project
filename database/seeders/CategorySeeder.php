<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Accounting/Finance',
            'Bank/Non-Bank Fin. Institution',
            'Commercial/Supply Chain',
            'Education/Training',
            'Engineer/Architects',
            'Garments/Textile',
            'HR/Org. Development',
            'Design/Creative',
            'Hospitality/Travel/Tourism',
            'Beauty Care/Health & Fitness',
            'Electrician/Construction/Repair',
            'IT & Telecommunication',
            'Marketing/Sales',
            'Media/Ad./Event Mgt.',
            'Medical/Pharma',
            'Agro (Plant/Animal/Fisheries)',
            'NGO/Development',
            'Research/Consultancy',
            'Secretary/Receptionist',
            'Security/Support Service',
            'Others',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
