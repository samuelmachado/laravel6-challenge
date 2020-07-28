<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    public function setBestReply(Reply $reply)
    {
        $this->best_reply_id = $reply->id;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
