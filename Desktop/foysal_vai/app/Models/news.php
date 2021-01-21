<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class, "author_id", 'id');
    }

    public function user1(){
        return $this->belongsTo(User::class, "changer", 'id');
    }
}
