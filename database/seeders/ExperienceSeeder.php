<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Experience;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Experience::create([
            'user_id' => 1,
            'title' => 'Software Engineer Intern',
            'company_name' => 'TRUEPIXELGROUP- Canada',
            'company_logo' => 'company_logos/truepixelgroup.png',
            'start_date' => '2021-11-01',
            'end_date' => '2022-01-01',
            'is_continued' => false,
            'description' => 'Optimized websites for SEO and managed social media posts.',
        ]);

        Experience::create([
            'user_id' => 1,
            'title' => 'BI Developer Intern',
            'company_name' => 'PwC-Switzerland',
            'company_logo' => 'company_logos/pwc.png',
            'start_date' => '2023-04-01',
            'end_date' => '2023-05-01',
            'is_continued' => false,
            'description' => 'Created Power BI visualizations for Diversity and Inclusion project.',
        ]);

        Experience::create([
            'user_id' => 1,
            'title' => 'Junior PHP Laravel Developer',
            'company_name' => 'Vebtual Limited',
            'company_logo' => 'company_logos/vebtual.png',
            'start_date' => '2023-07-01',
            'end_date' => '2023-09-01',
            'is_continued' => false,
            'description' => 'Developed CRM web applications and optimized code for performance.',
        ]);

        Experience::create([
            'user_id' => 1,
            'title' => 'Software Engineer',
            'company_name' => 'Tecjaunt',
            'company_logo' => 'company_logos/tecjaunt.png',
            'start_date' => '2023-11-01',
            'end_date' => null,
            'is_continued' => true,
            'description' => 'Managing both frontend and backend teams to achieve company goals.',
        ]);
    }
}