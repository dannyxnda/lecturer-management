<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Research extends Model
{
  	protected $table = "user_research";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function lecturer_research(){
    	return $this->belongsTo('App\Lecturer_Research', 'id_lecturer_research', 'id');
    }
}
