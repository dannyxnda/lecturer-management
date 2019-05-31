<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = "users";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'fullname', 'email', 'password','profile_picture', 'degree', 'phone_number', 'role', 'id_department'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function lecture_research(){
        return $this->hasMany('App\Lecturer_Reseach', 'id_user', 'id');
    }

    public function lecturer_relation(){
        return $this->hasMany('App\Lecturer_Relation', 'id_user', 'id');
    }

    public function department(){
        return $this->belongsTo('App\Department', 'id_department', 'id');
    }
}
