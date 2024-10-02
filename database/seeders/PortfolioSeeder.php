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
            'title' => 'Personal Portfolio Website',
            'description' => 'A personal portfolio website to showcase my projects and skills.',
            'stack' => 'HTML,CSS,JavaScript,Laravel',
            'image_path' => 'portfolio_images/portfolio-1.png',
            'project_url' => 'https://example.com/portfolio1',
            'completion_date' => '2021-05-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'E-commerce Platform',
            'description' => 'An e-commerce platform for buying and selling products online.',
            'stack' => 'React,Node.js,Express,MongoDB',
            'image_path' => 'portfolio_images/2.jpg',
            'project_url' => 'https://example.com/portfolio2',
            'completion_date' => '2022-03-01',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Blog Website',
            'description' => 'A blog website to share articles and tutorials.',
            'stack' => 'WordPress,PHP,MySQL',
            'image_path' => 'portfolio_images/3.png',
            'project_url' => 'https://example.com/portfolio3',
            'completion_date' => '2020-08-15',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Social Media App',
            'description' => 'A social media application for connecting people.',
            'stack' => 'Flutter,Dart,Firebase',
            'image_path' => 'portfolio_images/portfolio-1.png',
            'project_url' => 'https://example.com/portfolio4',
            'completion_date' => '2021-11-20',
        ]);

        Portfolio::create([
            'user_id' => 1,
            'title' => 'Task Management Tool',
            'description' => 'A tool to manage tasks and projects efficiently.',
            'stack' => 'Vue.js,Laravel,MySQL',
            'image_path' => 'portfolio_images/2.jpg',
            'project_url' => 'https://example.com/portfolio5',
            'completion_date' => '2022-06-10',
        ]);
    }
}