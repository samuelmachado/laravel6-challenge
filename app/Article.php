<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $fillable = ['title', 'excerpt','body'];
    
    protected $guarded = [];
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public function path(){
        return route('articles.show', $this);
    }

    public function author()
    {
        return $this->belongsTo('user', 'user_id');
    }
    // public function user()
    // {
    //     return $this->belongsTo('user');
    // }
}
