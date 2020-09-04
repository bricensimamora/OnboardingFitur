<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $guarded = [];

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }
    
    public function answer(){
        return $this->hasMany(Answer::class);
    }
}
