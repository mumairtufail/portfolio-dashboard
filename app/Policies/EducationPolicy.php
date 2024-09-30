<?php

// app/Policies/EducationPolicy.php
namespace App\Policies;

use App\Models\Education;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EducationPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }

    public function delete(User $user, Education $education)
    {
        return $user->id === $education->user_id;
    }
}