<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    public function like(){
        return $this->hasMany(like::class);
    }
}
