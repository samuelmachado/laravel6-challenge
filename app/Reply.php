<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
     public function getRouteKeyName()
    {
        return 'conversation_id';
    }
    // public function conversation()
    // {
    //     return $this->belongsTo('conversation');
    // }
}
