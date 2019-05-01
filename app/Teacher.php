<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

}
