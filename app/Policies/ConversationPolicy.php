<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    // public function before(User $user)
    // {
    //     if($user->id == 31)
    //     {
    //         return true;
    //     }
    // }
    public function view(User $user, Conversation $conversation)

    {
        return $conversation->user->is($user);
    }
    public function update(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    } 

}