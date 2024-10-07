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
        $skills = [
            ['name' => 'PHP', 'description' => 'Experienced in PHP and Laravel framework.'],
            ['name' => 'JavaScript', 'description' => 'Proficient in JavaScript and various libraries like React and Vue.js.'],
            ['name' => 'Python', 'description' => 'Skilled in Python for data analysis and web development.'],
            ['name' => 'AWS', 'description' => 'Certified AWS Solutions Architect with experience in cloud infrastructure.'],
            ['name' => 'Git', 'description' => 'Proficient in version control using Git.'],
            ['name' => 'FastAPI', 'description' => 'Experienced in building APIs using FastAPI.'],
            ['name' => 'Laravel', 'description' => 'Skilled in Laravel framework for web development.'],
            ['name' => 'OpenAI', 'description' => 'Experience with OpenAI APIs for AI applications.'],
            ['name' => 'Lightsail', 'description' => 'Experience with AWS Lightsail for simple cloud applications.'],
            ['name' => 'MySQL', 'description' => 'Proficient in MySQL for database management.'],
            ['name' => 'EC2', 'description' => 'Experience with AWS EC2 for scalable computing.'],
            ['name' => 'HTML', 'description' => 'Proficient in HTML for web development.'],
            ['name' => 'LangChain', 'description' => 'Experience with LangChain for language models.'],
            ['name' => 'Whisper', 'description' => 'Experience with OpenAI Whisper for speech recognition.'],
            ['name' => 'Bootstrap', 'description' => 'Proficient in Bootstrap for responsive web design.'],
            ['name' => 'Amplify', 'description' => 'Experience with AWS Amplify for frontend and backend development.'],
            ['name' => 'Route 53', 'description' => 'Experience with AWS Route 53 for DNS management.'],
            ['name' => 'CloudFront', 'description' => 'Experience with AWS CloudFront for content delivery.'],
            ['name' => 'ACM', 'description' => 'Experience with AWS ACM for certificate management.'],
            ['name' => 'Socket.io', 'description' => 'Experience with Socket.io for real-time communication.'],
            ['name' => 'Kafka', 'description' => 'Experience with Kafka for distributed streaming.'],
            ['name' => 'Azure', 'description' => 'Experience with Microsoft Azure for cloud services.'],
        ];

        foreach ($skills as $skill) {
            TechnicalSkill::create([
                'user_id' => 1, // Assuming user with ID 1 exists
                'name' => $skill['name'],
                'description' => $skill['description'],
            ]);
        }
    }
}