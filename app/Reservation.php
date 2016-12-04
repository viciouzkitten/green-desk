<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $hidden = ["created_at", "updated_at"];

    //
    public function room() {
    	return $this->belongsTo('App/Room');
    }

    public function event() {
    	return $this->hasOne('App/Event');
    }

    public function reservee() {
    	return $this->hasOne('App/Reservee');
    }

    public function exam() {
        return $this->hasOne('App/Exam');
    }
}
