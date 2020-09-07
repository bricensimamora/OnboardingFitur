<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuizzes extends Model
{
    protected $guarded = [];

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function responses(){
        return $this->hasMany(UserQuizzesResponses::class);
    }
}
