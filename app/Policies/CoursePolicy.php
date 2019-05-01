<?php

namespace App\Policies;

use App\User;
use App\Course;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Role;

class CoursePolicy
{
    use HandlesAuthorization;

    public function opt_for_course(User $user, Course $course)
    {
        return ! $user->teacher || $user->teacher->id !== $course->teacher_id;
    }

    public function subscribe(User $user)
    {
        return $user->role_id !== Role::ADMIN && ! $user->subscribed('main');
    }

    public function inscribe (User $user, Course $course)
    {
        return ! $course->students->contains($user->student->id);
    }



}
