<?php

Route::get('/', 'studentController@getSearchTeacher');

Route::get('search-teacher', 'studentController@getSearchTeacher');

//ajax search teacher by department
Route::post('searchbydep', 'studentController@searchByDep');
//ajax search teacher by lecture_qt
Route::post('searchbylec', 'studentController@searchByLec');

//info teacher
Route::get('teacher/info/{id}', 'studentController@getInfoTeacher');

//updateinfo
Route::get('update/teacher', 'TeacherController@getUpdateInfo')->middleware('teacherLogin');;

//loginteacher
Route::get('teacher/login', 'TeacherController@getLoginTeacher');
Route::post('/teacher/login', 'TeacherController@postLogin');
//Đăng xuất
Route::get('/teacher/logout','TeacherController@getLogout');

// ajax add lecture_qt
Route::post('addlecture_qt', 'TeacherController@addLecture_qt')->middleware('teacherLogin');
// ajax add lecture_reseach
Route::post('adduserres', 'TeacherController@addRes')->middleware('teacherLogin');

//delete lecture_qt
Route::get('deletelecture_qt/{id}', 'TeacherController@deleteLecture_qt')->middleware('teacherLogin');

//delete lecture_res
Route::get('deletelecture_res/{id}', 'TeacherController@deleteLecture_res')->middleware('teacherLogin');

//update avatar

//update info
Route::get('updateinfo/{id}', 'TeacherController@getUpdate')->middleware('teacherLogin');
Route::post('updateinfo/{id}', 'TeacherController@postUpdateInfo')->middleware('teacherLogin');

//loginadmin
Route::get('admin/login', 'AdminController@getLoginAdmin');
Route::post('/admin/login', 'AdminController@postLogin');
//Đăng xuất
Route::get('/admin/logout','AdminController@getLogout');

//quanlydonvi
Route::get('/quanlydonvi', 'AdminController@getQuanLyDonVi')->middleware('adminLogin')->name('listdep');

//listteacher
Route::get('/listteacher', 'AdminController@getListTeacher')->middleware('adminLogin')->name('listteacher');

//import excel
Route::post('importexcel', 'ImportExcelController@importexcel')->name('importexcel');

//add teacher
Route::get('addteacher', 'AdminController@getAddTeacher')->middleware('adminLogin')->name('addteacher');
Route::post('addteacher', 'AdminController@postAddTeacher');

//edit teacher
Route::get('editteacher/{id}', 'AdminController@getEditTeacher')->middleware('adminLogin')->name('editteacher');
Route::post('editteacher/{id}', 'AdminController@postEditTeacher');

//delete teacher
Route::get('deleteteacher/{id}','AdminController@getDeleteTeacher' )->middleware('adminLogin');

//add teacher
Route::get('adddep', 'AdminController@getAddDep')->middleware('adminLogin')->name('adddep');
Route::post('adddep', 'AdminController@postAddDep');

//edit teacher
Route::get('editdep/{id}', 'AdminController@getEditDep')->middleware('adminLogin')->name('editdep');
Route::post('editdep/{id}', 'AdminController@postEditDep');

//delete teacher
Route::get('deletedep/{id}','AdminController@getDeleteDep' )->middleware('adminLogin');

//listresseach

Route::get('listres', 'AdminController@getListRes')->middleware('adminLogin')->name('listres');
Route::get('addres', 'AdminController@getAddRes')->middleware('adminLogin');
Route::post('addres', 'AdminController@postAddRes')->middleware('adminLogin');

Route::get('addlectres', 'AdminController@getAddLectRes')->middleware('adminLogin');
Route::post('addlectres', 'AdminController@postAddLectRes')->middleware('adminLogin');
Route::get('deletelectres/{id}', 'AdminController@deleteLectRes');

