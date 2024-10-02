<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'umair',
            'first_name' => 'Umair',
            'last_name' => 'Tufail',
            'is_admin' => false,
            'first_title' => 'Web Developer',
            'second_title' => 'Backend Developer',
            'third_title' => 'AWS Certified',
            'bio' => 'A passionate web developer with experience in various technologies.',
            'birthday' => '1990-01-01',
            'address' => '123 Main St, Anytown, USA',
            'phone' => '123-456-7890',
            'skype' => 'umair.skype',
            'freelance_status' => 'Available',
            'facebook_url' => 'https://facebook.com/umair',
            'behance_url' => 'https://behance.net/umair',
            'dribbble_url' => 'https://dribbble.com/umair',
            'email' => 'umair@gmail.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'username' => 'user',
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'is_admin' => true,
            'first_title' => 'Software Engineer',
            'second_title' => 'Tech Enthusiast',
            'third_title' => 'Project Manager',
            'bio' => 'An experienced software engineer with a knack for project management.',
            'birthday' => '1985-05-15',
            'address' => '456 Elm St, Othertown, USA',
            'phone' => '987-654-3210',
            'skype' => 'jane.doe.skype',
            'freelance_status' => 'Not Available',
            'facebook_url' => 'https://facebook.com/jane.doe',
            'behance_url' => 'https://behance.net/jane.doe',
            'dribbble_url' => 'https://dribbble.com/jane.doe',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}