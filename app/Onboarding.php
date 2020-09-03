<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    //
    protected $guarded = [];
    protected $fillable = ['judul', 'file'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
