<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TechnicalSkill;

class TechnicalSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TechnicalSkill::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'name' => 'PHP',
            'description' => 'Experienced in PHP and Laravel framework.',
        ]);

        TechnicalSkill::create([
            'user_id' => 1, // Assuming user with ID 1 exists
            'name' => 'JavaScript',
            'description' => 'Proficient in JavaScript and various libraries like React and Vue.js.',
        ]);

        TechnicalSkill::create([
            'user_id' => 2, // Assuming user with ID 2 exists
            'name' => 'Python',
            'description' => 'Skilled in Python for data analysis and web development.',
        ]);

        TechnicalSkill::create([
            'user_id' => 2, // Assuming user with ID 2 exists
            'name' => 'AWS',
            'description' => 'Certified AWS Solutions Architect with experience in cloud infrastructure.',
        ]);
    }
}