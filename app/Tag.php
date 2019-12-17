<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        // belongsToMany polimórfico
        return $this->morphedByMany(Post::class, 'taggable');
    }
    public function videos(){
        // belongsToMany polimórfico
        return $this->morphedByMany(Video::class, 'taggable');
    }
}
