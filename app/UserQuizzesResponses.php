<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserQuizzesResponses extends Model
{
    protected $guarded = [];

    public function userQuizzes(){
        return $this->belongsTo(UserQuizzes::class);
    }
}