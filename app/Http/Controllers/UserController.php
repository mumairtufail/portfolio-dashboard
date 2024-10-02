<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($name)
    {
        // Fetch the user data based on the username along with related data
        $user = User::where('username', $name)
            ->with(['educations', 'portfolios', 'technicalSkills', 'softSkills', 'experiences'])
            ->firstOrFail();

        // Pass the user data to the view
        return view('user.partials.app', compact('user'));
    }
}