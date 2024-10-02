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
            'title' => 'Junior Web Developer',
            'company_name' => 'Tech Solutions Inc.',
            'company_logo' => 'company_logos/tech_solutions.png',
            'start_date' => '2019-07-01',
            'end_date' => '2020-12-01',
            'is_continued' => false,
            'description' => 'Worked on various web development projects using HTML, CSS, and JavaScript.',
        ]);

        Experience::create([
            'user_id' => 1,
            'title' => 'Senior Software Engineer',
            'company_name' => 'Innovative Tech Ltd.',
            'company_logo' => 'company_logos/innovative_tech.png',
            'start_date' => '2021-01-01',
            'end_date' => null,
            'is_continued' => true,
            'description' => 'Leading a team of developers to build scalable software solutions.',
        ]);
    }
}