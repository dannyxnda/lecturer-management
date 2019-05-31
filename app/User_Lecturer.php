<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Lecturer extends Model
{
    protected $table = "user_lecturer";

    public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function lecturer_relation(){
    	return $this->belongsTo('App\Lecturer_Relation', 'id_lecturer_relation', 'id');
    }
}
