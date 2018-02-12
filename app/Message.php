<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    public $table = 'messages';
    
    protected $fillable = ['message', 'user_id'];

    public function User() {
        return $this->belongsTo(User::class);
    }
}
