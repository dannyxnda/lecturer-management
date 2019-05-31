<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        $u = User::where('email', $row[4])->count('id');
        if($u == 0 && $row[0] != "STT" ){
            return new User([
                'username'     => $row[1],
                'fullname'     => $row[3],
                'email'    => $row[4],
                'degree'    => "Thạc Sĩ",
                'phone_number'    => 0,
                'role'    => 0,
                'id_department'    => 1,
                'password' => \Hash::make($row[2]),
                'profile_picture'    => 'avatar.png',
            ]);
        }
    }
}
