<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
	protected $table = "department";

    public function user(){
        return $this->hasMany('App\User', 'id_department', 'id');
    }
}
