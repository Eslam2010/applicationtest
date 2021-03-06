<?php

namespace App\Policies;

use App\Model\Section;
use App\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class Section_po
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before(User $user)
    {
        if($user->role=='admin')
        {
            return true;
        }
    }

    public function add_post(User $user ,Section $section)
    {
        if($user->id == $section->user_id)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
