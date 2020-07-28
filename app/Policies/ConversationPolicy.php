<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

 
    public function update(User $user, Conversation $conversation)
    {
        return $conversation->user->is($user);
    } 

}