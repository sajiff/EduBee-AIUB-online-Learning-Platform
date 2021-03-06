<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('Home.index');
});

Route::get('/home', 'HomeController@index');
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');


Route::middleware(['session_check'])->group(function(){
  //superadmin
  Route::middleware(['superadmin_check'])->group(function(){
    Route::get('/superadmin', 'SuperadminController@index')->name('Superadmin.index');

    Route::get('/superadmin/adminmanagement', 'SuperadminController@adminmanagement')->name('Superadmin.adminmanagement');
    Route::post('/superadmin/adminmanagement/addadmin', 'SuperadminController@addadmin');
    Route::post('/superadmin/adminmanagement/updateadmin/{id}', 'SuperadminController@updateadmin');
    Route::post('/superadmin/adminmanagement/deleteadmin/{id}', 'SuperadminController@deleteadmin');
    Route::post('/superadmin/adminmanagement/searchadmin', 'SuperadminController@searchadmin')->name('Superadmin.searchadmin');

    Route::get('/superadmin/moderatormanagement', 'SuperadminController@moderatormanagement')->name('Superadmin.moderatormanagement');
    Route::post('/superadmin/moderatormanagement/addmoderator', 'SuperadminController@addmoderator');
    Route::post('/superadmin/moderatormanagement/updatemoderator/{id}', 'SuperadminController@updatemoderator');
    Route::post('/superadmin/moderatormanagement/deletemoderator/{id}', 'SuperadminController@deletemoderator');
    Route::post('/superadmin/adminmanagement/searchmoderator', 'SuperadminController@searchmoderator')->name('Superadmin.searchmoderator');

    Route::get('/superadmin/usermanagement', 'SuperadminController@usermanagement')->name('Superadmin.usermanagement');
    Route::post('/superadmin/usermanagement/adduser', 'SuperadminController@adduser');
    Route::post('/superadmin/usermanagement/updateuser/{id}', 'SuperadminController@updateuser');
    Route::post('/superadmin/usermanagement/deleteuser/{id}', 'SuperadminController@deleteuser');

    Route::get('/superadmin/departmentmanagement', 'SuperadminController@departmentmanagement')->name('Superadmin.departmentmanagement');
    Route::post('/superadmin/departmentmanagement/adddept', 'SuperadminController@adddept');
    Route::post('/superadmin/departmentmanagement/updatedept/{id}', 'SuperadminController@updatedept');
    Route::post('/superadmin/departmentmanagement/deletedept/{id}', 'SuperadminController@deletedept');
    Route::get('/superadmin/departmentmanagement/downloadDept', 'SuperadminController@departmentPdf');

    Route::get('/superadmin/coursemanagement', 'SuperadminController@coursemanagement')->name('Superadmin.coursemanagement');
    Route::post('/superadmin/coursemanagement/addcourse', 'SuperadminController@addcourse');
    Route::post('/superadmin/coursemanagement/updatecourse/{id}', 'SuperadminController@updatecourse');
    Route::post('/superadmin/coursemanagement/deletecourse/{id}', 'SuperadminController@deletecourse');
    Route::get('/superadmin/coursemanagement/downloadCourse', 'SuperadminController@coursePdf');

    Route::get('/superadmin/courseforstudent', 'SuperadminController@courseforstudent')->name('Superadmin.courseforstudent');
    Route::get('/superadmin/printcourseforstudent', 'SuperadminController@printcourseforstudent')->name('Superadmin.printcourseforstudent');
    Route::post('/superadmin/courseforstudent/addcourseforstudent', 'SuperadminController@addcourseforstudent');
    Route::post('/superadmin/courseforstudent/updatecourseforstudent/{id}', 'SuperadminController@updatecourseforstudent');
    Route::post('/superadmin/courseforstudent/deletecourseforstudent/{id}', 'SuperadminController@deletecourseforstudent');

    Route::get('/superadmin/instructorallocation', 'SuperadminController@instructorallocation')->name('Superadmin.instructorallocation');
    Route::get('/superadmin/printinstructorallocation', 'SuperadminController@printinstructorallocation')->name('Superadmin.printinstructorallocation');
    Route::post('/superadmin/instructorallocation/addinstructor', 'SuperadminController@addinstructor');
    Route::post('/superadmin/instructorallocation/updateinstructor/{id}', 'SuperadminController@updateinstructor');
    Route::post('/superadmin/instructorallocation/deleteinstructor/{id}', 'SuperadminController@deleteinstructor');

    Route::get('/superadmin/announcements', 'SuperadminController@announcements')->name('Superadmin.announcements');
    Route::post('/superadmin/announcements/addannouncement', 'SuperadminController@addannouncement');

    Route::get('/superadmin/profilesettings', 'SuperadminController@profilesettings')->name('Superadmin.profilesettings');
    Route::post('/superadmin/profilesettings', 'SuperadminController@saveprofilesettings');

    Route::get('/superadmin/security', 'SuperadminController@security')->name('Superadmin.security');
    Route::post('/superadmin/security', 'SuperadminController@savesecurity');

    Route::get('/superadmin/myaccount', 'SuperadminController@myaccount')->name('Superadmin.myaccount');
    Route::get('/superadmin/myinbox', 'SuperadminController@myinbox');
    Route::post('/superadmin/myinbox/storemail', 'SuperadminController@storemail')->name('Superadmin.storemail');
    Route::post('/superadmin/myinbox/storereply', 'SuperadminController@storereply')->name('Superadmin.storereply');
    Route::post('/superadmin/myinbox/deleteemail/{id}', 'SuperadminController@deleteemail')->name('Superadmin.deleteemail');

    route::  post('superadmin/addProfile','SuperadminController@store')->name('superadmin.addProfile');
  });

  //admin
  Route::middleware(['admin_check'])->group(function(){
    Route::get('/admin', 'AdminController@index')->name('Admin.index');

    Route::get('/admin/moderatormanagement', 'AdminController@moderatormanagement')->name('Admin.moderatormanagement');
    Route::post('/admin/moderatormanagement/addmoderator', 'AdminController@addmoderator');
    Route::post('/admin/moderatormanagement/updatemoderator/{id}', 'AdminController@updatemoderator');
    Route::post('/admin/moderatormanagement/deletemoderator/{id}', 'AdminController@deletemoderator');
    Route::post('/admin/adminmanagement/searchmoderator', 'AdminController@searchmoderator')->name('Admin.searchmoderator');

    Route::get('/admin/usermanagement', 'AdminController@usermanagement')->name('Admin.usermanagement');
    Route::post('/admin/usermanagement/adduser', 'AdminController@adduser');
    Route::post('/admin/usermanagement/updateuser/{id}', 'AdminController@updateuser');
    Route::post('/admin/usermanagement/deleteuser/{id}', 'AdminController@deleteuser');

    Route::get('/admin/coursemanagement', 'AdminController@coursemanagement');
    Route::get('/admin/coursemanagement', 'AdminController@coursemanagement')->name('Admin.coursemanagement');
    Route::post('/admin/coursemanagement/addcourse', 'AdminController@addcourse');
    Route::post('/admin/coursemanagement/updatecourse/{id}', 'AdminController@updatecourse');
    Route::post('/admin/coursemanagement/deletecourse/{id}', 'AdminController@deletecourse');
    Route::get('/admin/coursemanagement/downloadCourse', 'AdminController@coursePdf');

    Route::get('/admin/courseforstudent', 'AdminController@courseforstudent')->name('Admin.courseforstudent');
    Route::get('/admin/printcourseforstudent', 'AdminController@printcourseforstudent')->name('Admin.printcourseforstudent');
    Route::post('/admin/courseforstudent/addcourseforstudent', 'AdminController@addcourseforstudent');
    Route::post('/admin/courseforstudent/updatecourseforstudent/{id}', 'AdminController@updatecourseforstudent');
    Route::post('/admin/courseforstudent/deletecourseforstudent/{id}', 'AdminController@deletecourseforstudent');

    Route::get('/admin/instructorallocation', 'AdminController@instructorallocation')->name('Admin.instructorallocation');
    Route::get('/admin/printinstructorallocation', 'AdminController@printinstructorallocation')->name('Admin.printinstructorallocation');
    Route::post('/admin/instructorallocation/addinstructor', 'AdminController@addinstructor');
    Route::post('/admin/instructorallocation/updateinstructor/{id}', 'AdminController@updateinstructor');
    Route::post('/admin/instructorallocation/deleteinstructor/{id}', 'AdminController@deleteinstructor');

    Route::get('/admin/announcements', 'AdminController@announcements')->name('Admin.announcements');

    Route::get('/admin/profilesettings', 'AdminController@profilesettings')->name('Admin.profilesettings');
    Route::post('/admin/profilesettings', 'AdminController@saveprofilesettings');

    Route::get('/admin/security', 'AdminController@security')->name('Admin.security');
    Route::post('/admin/security', 'AdminController@savesecurity');

    Route::get('/admin/myaccount', 'AdminController@myaccount')->name('Admin.myaccount');

    Route::get('/admin/myinbox', 'AdminController@myinbox');
    Route::post('/admin/myinbox/storemail', 'AdminController@storemail')->name('Admin.storemail');
    Route::post('/admin/myinbox/storereply', 'AdminController@storereply')->name('Admin.storereply');
    Route::post('/admin/myinbox/deleteemail/{id}', 'AdminController@deleteemail')->name('Admin.deleteemail');

    route::  post('admin/addProfile','AdminController@store')->name('admin.addProfile');
  });

  //moderator
  Route::middleware(['moderator_check'])->group(function(){
    Route::get('/moderator', 'ModeratorController@index')->name('Moderator.index');
    Route::get('/moderator/usermanagement', 'ModeratorController@usermanagement')->name('Moderator.usermanagement');;

    Route::post('/moderator/usermanagement/adduser', 'ModeratorController@adduser');
    Route::post('/moderator/usermanagement/updateuser/{id}', 'ModeratorController@updateuser');
    Route::post('/moderator/usermanagement/deleteuser/{id}', 'ModeratorController@deleteuser');

    Route::get('/moderator/useractivity', 'ModeratorController@useractivity');
    Route::get('/discussionforum', 'ModeratorController@discussionforum');

    Route::get('/moderator/courseforstudent', 'ModeratorController@courseforstudent')->name('Moderator.courseforstudent');
    Route::get('/moderator/printcourseforstudent', 'ModeratorController@printcourseforstudent')->name('Moderator.printcourseforstudent');
    Route::post('/moderator/courseforstudent/addcourseforstudent', 'ModeratorController@addcourseforstudent');
    Route::post('/moderator/courseforstudent/updatecourseforstudent/{id}', 'ModeratorController@updatecourseforstudent');
    Route::post('/moderator/courseforstudent/deletecourseforstudent/{id}', 'ModeratorController@deletecourseforstudent');

    Route::get('/moderator/instructorallocation', 'ModeratorController@instructorallocation')->name('Moderator.instructorallocation');
    Route::get('/moderator/printinstructorallocation', 'ModeratorController@printinstructorallocation')->name('Moderator.printinstructorallocation');
    Route::post('/moderator/instructorallocation/addinstructor', 'ModeratorController@addinstructor');
    Route::post('/moderator/instructorallocation/updateinstructor/{id}', 'ModeratorController@updateinstructor');
    Route::post('/moderator/instructorallocation/deleteinstructor/{id}', 'ModeratorController@deleteinstructor');

    Route::get('/moderator/profilesettings', 'ModeratorController@profilesettings')->name('Moderator.profilesettings');
    Route::post('/superadmin/profilesettings', 'ModeratorController@saveprofilesettings');

    Route::get('/moderator/security', 'ModeratorController@security')->name('Moderator.security');
    Route::post('/moderator/security', 'ModeratorController@savesecurity');

    Route::get('/moderator/myaccount', 'ModeratorController@myaccount');
    Route::get('/moderator/myinbox', 'ModeratorController@myinbox');
    Route::post('/moderator/myinbox/storemail', 'ModeratorController@storemail')->name('Moderator.storemail');
    Route::post('/moderator/myinbox/storereply', 'ModeratorController@storereply')->name('Moderator.storereply');
    Route::post('/moderator/myinbox/deleteemail/{id}', 'ModeratorController@deleteemail')->name('Moderator.deleteemail');

    route::  post('moderator/addProfile','ModeratorController@store')->name('moderator.addProfile');
  });

  //instructor
  Route::middleware(['instructor_check'])->group(function(){
    Route::get('/instructor', 'InstructorController@index')->name('Instructor.index');
    Route::get('/instructor/classes', 'InstructorController@classes');
    Route::get('/instructor/coursefile/{coursename}/{section}', 'InstructorController@coursefile')->name('Instructor.coursefile');
    Route::post('/instructor/coursefilenotes/{coursename}/{section}', 'InstructorController@coursefilenotes');
    Route::post('/instructor/coursefilevideos/{coursename}/{section}', 'InstructorController@coursefilevideos');
    Route::post('/instructor/coursefileassignments/{coursename}/{section}', 'InstructorController@coursefileassignments');
    Route::get('/instructor/coursegrades/{coursename}/{section}', 'InstructorController@coursegrades')->name('Instructor.coursegrades');
    Route::post('/instructor/coursegrades/updatecourseforstudent/{coursename}/{section}/{id}', 'InstructorController@updatecourseforstudent');
    Route::get('/instructor/grades', 'InstructorController@grades')->name('Instructor.grades');
    Route::get('/instructor/studentlist/{coursename}/{section}', 'InstructorController@studentlist');
    Route::get('/instructor/printstudentlist/{coursename}/{section}', 'InstructorController@printstudentlist')->name('Instructor.printstudentlist');
    Route::get('/instructor/profilesettings', 'InstructorController@profilesettings');
    Route::post('/instructor/profilesettings', 'InstructorController@saveprofilesettings');
    Route::get('/instructor/security', 'InstructorController@security')->name('Instructor.security');
    Route::post('/instructor/security', 'InstructorController@savesecurity');
    Route::get('/instructor/myaccount', 'InstructorController@myaccount')->name('Instructor.myaccount');

    Route::get('/instructor/discussionforum', 'InstructorController@discussionforum');

    route::  post('instructor/addProfile','InstructorController@store')->name('instructor.addProfile');

    Route::get('/instructor/myinbox', 'InstructorController@myinbox');
    Route::post('/instructor/myinbox/storemail', 'InstructorController@storemail')->name('Instructor.storemail');
    Route::post('/instructor/myinbox/storereply', 'InstructorController@storereply')->name('Instructor.storereply');
    Route::post('/instructor/myinbox/deleteemail/{id}', 'InstructorController@deleteemail')->name('Instructor.deleteemail');
  });


  //student
  Route::middleware(['student_check'])->group(function(){
    Route::get('/student', 'StudentController@index')->name('Student.index');
    Route::get('/student/consultation', 'StudentController@consultation');
    Route::get('/student/coursefile/{coursename}/{section}', 'StudentController@coursefile')->name('Student.coursefile');
    //Route::get('/discussionforum', 'StudentController@discussionforum');
    Route::get('/student/mycourse', 'StudentController@mycourse');
    Route::get('/student/mygrades', 'StudentController@mygrades');
    Route::get('/student/printmygrades', 'StudentController@printmygrades');
    Route::get('/student/profilesettings', 'StudentController@profilesettings');
    Route::post('/student/profilesettings', 'StudentController@saveprofilesettings');
    Route::get('/student/security', 'StudentController@security')->name('Student.security');
    Route::post('/student/security', 'StudentController@savesecurity');
    Route::get('/student/myaccount', 'StudentController@myaccount')->name('Student.myaccount');
    Route::get('/student/myinbox', 'StudentController@myinbox');
    Route::post('/student/myinbox/storemail', 'StudentController@storemail')->name('Student.storemail');
    Route::post('/student/myinbox/storereply', 'StudentController@storereply')->name('Student.storereply');
    Route::post('/student/myinbox/deleteemail/{id}', 'StudentController@deleteemail')->name('Student.deleteemail');

    route::  post('student/addProfile','StudentController@store')->name('student.addProfile');
  });

  //fourm
  Route::resource('forumposts','forumController');
  Route::get('/forumposts/{id}/printshow', 'forumController@printshow');
  Route::resource('comments','commentController');
  Route::get('/comments/{id}/create', 'commentController@create');
  Route::get('/forumpost/dashboard', 'forumController@dashboard');
  
  Route::get('/forumpost/search', 'forumController@search')->name('forumController.search');

});
