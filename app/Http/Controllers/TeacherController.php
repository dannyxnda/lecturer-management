<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Lecturer_Research;
use App\Lecturer_Relation;
use App\Department_User;
use App\User;
use App\Reseach_Field;
use App\User_Research;
use App\User_Lecturer;
use DB;


class TeacherController extends Controller
{
    public function getUpdateInfo(){
        $id = Auth::User()->id;
        $user = User::where('id', $id)->first();

        //get reseach by user
        $research = User_Research::where('id_user', $id)->get(); 

        //get reseach 
        //get lecture_relation by user
        $lecturer = User_Lecturer::where('id_user', $id)->get();

        //get lecture 
        $lectureradd = DB::table('lecturer_relation')
            ->join('research_field','research_field.id','=','lecturer_relation.id_research_field')
            ->select('research_field.*')
            ->get();

        $res = Lecturer_Research::all();
        //get all research
        $research_field = Reseach_Field::all();
    	return view('teacher.updateinfo', compact('user', 'research', 'lecturer', 'research_field', 'lectureradd', 'res'));
    }

    // login
    public function getLoginTeacher(){
    	return view('teacher.login');
    }

    public function postLogin(Request $request){    
           $this->validate($request,
            [
                'username'=>'required|min:4',
                'password'=>'required|min:6',
                
            ],
            [
                'username.required'=>'Vui lòng nhập tên tài khoản!',
                'username.min'=>'Tên đăng nhập quá ngắn',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
            ]
        );
        
        $user = array('username'=>$request->username, 'password'=>$request->password, 'role'=>$request->role);
        if(Auth::attempt($user)){
            return redirect('/search-teacher');
        }

        else{
            return redirect('/teacher/login')->with('message','Đăng Nhập thất bại');
        }
        
    }

    public function getLogout(){
        Auth::logout();
        return redirect('/');
    }

    //ajax add lecture_qt
    public function addLecture_qt(Request $req) {
        $result = false;
        $id = Auth::User()->id;
        foreach($req->allVals as $allVals){
            $lecturer = User_Lecturer::where('id_lecturer_relation', $allVals)
                                    ->where('id_user', $id)->first();
            if($lecturer != null){
                $result = true;
            }

            else
            {
            $lecturer_relation = new User_Lecturer;
            $lecturer_relation->id_user = $id;
            $lecturer_relation->id_lecturer_relation = $allVals;
            $lecturer_relation->save();
            }
        }
        return response()->json($result);
    }

    //ajax add lecture_research
    public function addRes(Request $req) {
        $id = Auth::User()->id;
        $lecturer = User_Research::where('id_lecturer_research', $req->id_lecturer_research)
                                ->where('id_user', $id)->first();
        if($lecturer != null){
            return redirect()->back()->with('success', 'Thành Công');
        }

        else
        {
        $lecturer_relation = new User_Research;
        $lecturer_relation->id_user = $id;
        $lecturer_relation->id_lecturer_research = $req->id_lecturer_research;
        $lecturer_relation->save();
        }
        return redirect()->back()->with('message', 'Thành Công');
    }

    //delete lecture_relation
    public function deleteLecture_qt($id){
        $lecturer = User_Lecturer::where('id_lecturer_relation', $id)->first();
        $lecturer->delete();
        return redirect()->back()->with('message', 'Đã Xóa');
    }

    //delete lecture_res
    public function deleteLecture_res($id){
        $lecturer = User_Research::where('id_lecturer_research', $id)->first();
        $lecturer->delete();
        return redirect()->back()->with('success', 'Đã Xóa');
    }

    //updateinfo
    public function getUpdate($id){
        $user = User::where('id', $id)->first();
        return view('teacher.update', compact('user'));
    }

    public function postUpdateInfo($id , Request $req){
        $user = User::where('id', $id)->first();
        $user->fullname = $req->fullname;
        $user->email = $req->email;
        $user->phone_number = $req->phone_number;
        $user->degree = $req->degree;
        $user->website = $req->website;
        if($req->hasFile('profile_picture')){
            $file = $req->File('profile_picture');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi == 'jpg' || $duoi == 'png'){
                $savefile = str_random(4)."_".$name;
            while(file_exists("source/img/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("source/img/", $savefile);
            $user->profile_picture = $savefile;  
            }

            else{

                return redirect()->back()->with('loi', 'File không đúng định dạng');
            }
    
        }
        else{
            $user->profile_picture = $user->profile_picture;
        }  
        $user->save();
        return redirect()->back()->with('message', 'Cập nhật Thành Công');
    }

    
}
