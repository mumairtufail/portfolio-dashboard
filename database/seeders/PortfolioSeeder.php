<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolio::create([
            'user_id' => 1,
            'title' => 'Construction App',
            'description' => 'Developed backend for a SaaS construction app using Laravel and FastAPI, enabling construction workers to report task progress via a chatbot. Integrated speech recognition with OpenAI\'s Whisper API and deployed the app on Amazon EC2.',
            'stack' => 'Laravel,FastAPI,OpenAI Whisper,Amazon EC2',
            'image_path' => 'portfolio_images/construction_app.png',
            'project_url' => 'https://example.com/construction_app',
            'completion_date' => '2023-11-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'LAR Flight Booking',
            'description' => 'Developed a Flight Booking Management System using Laravel, integrating Amadeus flight third-party APIs for seamless booking and management of flights.',
            'stack' => 'Laravel,Amadeus API',
            'image_path' => 'portfolio_images/flight_booking.png',
            'project_url' => 'https://example.com/flight_booking',
            'completion_date' => '2023-12-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'E-Commerce Website',
            'description' => 'Developed a dynamic e-commerce website backend using Laravel, featuring a robust system for managing different roles and permissions.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/ecommerce.png',
            'project_url' => 'https://example.com/ecommerce',
            'completion_date' => '2024-01-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Employee Management System',
            'description' => 'Developed an Employee Management System (EMS) with feedback functionality, dynamic role and permission management, normalized tables for optimized queries, and Gmail SMTP integration for sending announcements to employees.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/ems.png',
            'project_url' => 'https://example.com/ems',
            'completion_date' => '2024-02-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Duniya Digital',
            'description' => 'Developed Duniya Digital, a responsive blogging platform for seamless reading on any device.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/duniya_digital.png',
            'project_url' => 'https://example.com/duniya_digital',
            'completion_date' => '2023-09-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Blue Sky CRM',
            'description' => 'Developed Blue Sky CRM on Laravel, featuring a dynamic inventory system and streamlined client-specific purchases for construction projects.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/blue_sky_crm.png',
            'project_url' => 'https://example.com/blue_sky_crm',
            'completion_date' => '2023-09-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Knowroo LMS',
            'description' => 'Developed Knowroo LMS, handling multiple roles including company super admin, teachers, TAs, and students. Features include class assignments, quizzes, and performance tracking.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/knowroo.png',
            'project_url' => 'https://example.com/knowroo',
            'completion_date' => '2023-09-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Arozeen E-Commerce',
            'description' => 'Developed a dynamic e-commerce website backend using Laravel, featuring a robust system for managing different roles and permissions.',
            'stack' => 'Laravel,PHP,MySQL,Bootstrap,Blade,HTML,CSS',
            'image_path' => 'portfolio_images/arozzen.png',
            'project_url' => 'https://example.com/arozzen',
            'completion_date' => '2023-09-01',
        ]);
    }
}