<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Education;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Education::create([
            'user_id' => 1,
            'institution' => 'University of Example',
            'degree' => 'Bachelor of Science',
            'field_of_study' => 'Computer Science',
            'start_date' => '2015-09-01',
            'end_date' => '2019-06-01',
            'description' => 'Studied various aspects of computer science including algorithms, data structures, and web development.',
        ]);

        Education::create([
            'user_id' => 1,
            'institution' => 'Example Institute of Technology',
            'degree' => 'Master of Science',
            'field_of_study' => 'Software Engineering',
            'start_date' => '2020-09-01',
            'end_date' => '2022-06-01',
            'description' => 'Focused on advanced software engineering principles and project management.',
        ]);
    }
}