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
            'institution' => 'Board of Intermediate and Secondary Education, Lahore',
            'degree' => 'Matric / O Levels',
            'field_of_study' => 'N/A',
            'start_date' => '2013-01-01', // Assuming start date
            'end_date' => '2015-01-01', // Assuming end date
            'description' => null,
        ]);

        Education::create([
            'user_id' => 1,
            'institution' => 'Board of Intermediate and Secondary Education, Lahore',
            'degree' => 'Intermediate / HSSC (Commerce)',
            'field_of_study' => 'Commerce',
            'start_date' => '2015-01-01', // Assuming start date
            'end_date' => '2017-01-01', // Assuming end date
            'description' => null,
        ]);

        Education::create([
            'user_id' => 1,
            'institution' => 'Superior University City Campus Lahore',
            'degree' => 'ADP-Computer Science (B.Sc. Computer Science)',
            'field_of_study' => 'Computer Science',
            'start_date' => '2022-01-01', // Assuming start date
            'end_date' => '2024-01-01', // Assuming end date
            'description' => 'Obtained a GPA of 3.19 out of 4 in the Semester System. Studied major subjects including PF, OOP, DSA, web development, database, and mobile app development.',        
        ]);

        // Education::create([
        //     'user_id' => 1,
        //     'institution' => 'Virtual University',
        //     'degree' => 'B.Sc. Computer Science',
        //     'field_of_study' => 'Computer Science',
        //     'start_date' => '2024', // Assuming start date
        //     'end_date' => null, // Ongoing
        //     'description' => 'Currently pursuing B.Sc. in Computer Science.',
        // ]);
    }
}