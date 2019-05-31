<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    // public function import(Request $request)
    // {
    //  $this->validate($request, [
    //   'select_file'  => 'required|mimes:xls,xlsx'
    //  ], 
    //  [ 'select_file.mimes' => 'Tệp không đúng định dạng']);

    //  $path = $request->file('select_file')->getRealPath();

    //  $data = Excel::load($path)->get();
    //  dd($data);

    //  if($data->count() > 0)
    //  {
    //   foreach($data->toArray() as $key => $value)
    //   {
    //    foreach($value as $row)
    //    {
    //     $insert_data[] = array(
    //      'username'  => $row['UserName'],
    //      'fullname'   => $row['FullName'],
    //      'email'   => $row['Email'],
    //      ,
    //      'password'   => \Hash::make($row['Password']),
    //      'role'   => $row['Role'],
    //      'id_department'   => $row['id_department']
    //     );
    //    }
    //   }

    //   if(!empty($insert_data))
    //   	{
    //    		DB::table('users')->insert($insert_data);
    //   	}
    //  }
    //  return back()->with('success', 'Thêm dữ liệu thành công');
    // }


    public function importexcel(Request $request) 
    {
		$this->validate($request, [
		  'select_file'  => 'required|mimes:xls,xlsx'
		], 
		[ 'select_file.mimes' => 'File không đúng định dạng!']);

		$users = Excel::import(new UsersImport(), $request->file('select_file'));
	
      return back()->with('success', 'Thêm dữ liệu thành công.');
    }
}
	