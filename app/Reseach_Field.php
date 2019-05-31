<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reseach_Field extends Model
{
    protected $table = "research_field";

    public function lecturer_research(){
    	return $this->hasMany('App\Lecturer_Research', 'id_research_field', 'id');
    }

    public function lecturer_relation(){
    	return $this->hasMany('App\Lecturer_Relation', 'id_research_field', 'id');
    }
}
