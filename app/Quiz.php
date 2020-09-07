<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    protected $fillable = ['title', 'description'];

    public function question(){
        return $this->hasMany(Question::class);
    }
    
    public function userQuizzes(){
        return $this->hasMany(UserQuizzes::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
