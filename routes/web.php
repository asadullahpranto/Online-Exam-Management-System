<?php

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

/*Route::get('/', function () {
  ///  return view('welcome');
   return view('homepage');
});*/


Route::get('/homepage','myController@homepage')->name('homepage')->middleware('guest');
Route::get('/about','myController@about')->name('about');

Route::get('/upcomingExam','myController@upcomingExam')->name('upcomingExam');
Route::get('/ongoingExam','myController@ongoingExam')->name('ongoingExam');
Route::get('/previousExam','myController@previousExam')->name('previousExam');

Route::get('/noticeBoard','myController@noticeBoard')->name('noticeBoard');

Route::get('/viaEmail','myController@viaEmail')->name('viaEmail');
Route::get('/viaMessenger','myController@viaMessenger')->name('viaMessenger');
Route::get('/viaPhone','myController@viaPhone')->name('viaPhone');

Route::get('/teacher','myController@teacher')->name('teacher');
Route::post('/teacher_info','myController@teacherInformation')->name('teacherInformation');

Route::get('/student','myController@student')->name('student');
Route::post('/student_info','myController@studentInformation')->name('studentInformation');
//
Route::get('/questions/{e}','MyController@questionsN')->middleware('auth:teachers');
Route::get('/developer','myController@developer')->name('developer');
Route::get('/copyright','myController@copyright')->name('copyright');
Route::get('/privacy','myController@privacy')->name('privacy');
Route::get('/contact','myController@contact')->name('contact');

Route::get('/settings','myController@settings')->name('settings');
Route::post('/logout','myController@logout')->name('logout');

Route::get('/teacherdash','myController@teacherdash')->name('teacherdash')->middleware('auth:teachers');
Route::get('/studentno','myController@studentno')->name('studentno');

Route::get('/examlistTeacher','myController@examlistTeacher')->name('examlistTeacher');
Route::get('/examname','myController@examname')->name('examname');

Route::post('/exam-name','myController@examDetailInformation')->name('exam-name');

Route::get('/examtrash','myController@examtrash')->name('examtrash');

Route::get('/studentDash','myController@studentDash')->name('studentDash')->middleware('auth:students');
Route::get('/examlist','myController@examlist')->name('examlist');

Route::get('/examresult','myController@examresult')->name('examresult');
Route::get('/homeworklist','myController@homeworklist')->name('homeworklist');
Route::get('/homeworkresult','myController@homeworkresult')->name('homeworkresult');

Route::get('/coursewisestudentlist','myController@coursewisestudentlist')->name('coursewisestudentlist');
Route::get('/overollstudentlist','myController@overollstudentlist')->name('overollstudentlist');
Route::get('/rankcoursewise','myController@rankcoursewise')->name('rankcoursewise');
// Route::get('/rankoverall','myController@rankoverall')->name('rankoverall');

Route::get('/teacherLogin','myController@teacherLogin')->name('teacherLogin')->middleware('guest');
Route::post('/teacher-login','myController@teacherLoginPost')->name('teacher-login')->middleware('guest');

Route::get('/studentLogin','myController@studentLogin')->name('studentLogin')->middleware('guest');
Route::post('/student-login','myController@studentLoginPost')->name('student-login')->middleware('guest');

Route::get('/import','myController@import')->name('import');
Route::get('/export','myController@export')->name('export');

Route::get('/createexam','myController@createexam')->name('createexam')->middleware('auth:teachers');
Route::post('/create-exam','myController@createexamInformation')->name('create-exam')->middleware('auth:teachers');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/notice-home','myController@noticeHome')->name('noticeHome');
Route::get('/ongoing-exam','myController@ongoingHome')->name('ongoingHome');
Route::get('/upcoming-exam','myController@upcomingHome')->name('upcomingHome');
Route::get('/previous-exam','myController@previousHome')->name('previousHome');

Route::get('/about-home','myController@aboutHome')->name('aboutHome');


Route::get('/developer-t','myController@dt')->name('dt');
Route::get('/copyright-t','myController@ct')->name('ct');
Route::get('/privacy-policy-t','myController@ppt')->name('ppt');
Route::get('/contact-t','myController@cot')->name('cot');

Route::get('/developer-s','myController@ds')->name('ds');
Route::get('/copyright-s','myController@cs')->name('cs');
Route::get('/privacy-policy-s','myController@pps')->name('pps');
Route::get('/contact-s','myController@cos')->name('cos');

Route::get('/questions','myController@questions')->name('questions')->middleware('auth:teachers');
// Route::get('/loginfirst','myController@loginfirst')->name('loginfirst');

Route::get('/create','myController@create')->name('create')->middleware('auth:teachers');
Route::get('/giveexam/{exam_detail}','myController@giveexam')->name('giveexam')->middleware('auth:students');

Route::post('/view_result/{exam_detail}','myController@giveexaminfo')->middleware('auth:students');
Route::get('/view-rank/{exam_detail}', 'MyController@viewrank')->middleware('auth:students');

Route::get('/view-rankt/{e}', 'MyController@viewrankT')->middleware('auth:teachers');
Route::get('/examlistforrank', 'MyController@examlistforrank')->middleware('auth:teachers');

Route::get('/viewstudent/{exam_detail}', 'MyController@viewstudent')->middleware('auth:teachers');
Route::post('/homepagelogin', function(\Illuminate\Http\Request $request){
  if($request->type=='s'){
    $crs = $request->only(['email', 'password']);
    \Auth::guard('students')->attempt($crs);
    if(  \Auth::guard('students')->check()){
      return  redirect('/studentDash');
    }
  } else {
    $crs = $request->only(['email', 'password']);
    \Auth::guard('teachers')->attempt($crs);
    if(  \Auth::guard('teachers')->check()){
      return  redirect('/teacherdash');
    }
  }
  session()->flash('f',1);
  return redirect()->back();
})->middleware('guest');




Route::get('/deletequestion/{q}','MyController@deletequestion')->middleware('auth:teachers');

Route::get('/editquestion/{q}','MyController@editquestion')->middleware('auth:teachers');
Route::post('/updatequestion/{q}','MyController@updatequestion')->middleware('auth:teachers');

Route::get('/editexamdetail/{e}','MyController@editexamdetail')->middleware('auth:teachers');
Route::post('/updateexamdetail/{e}','MyController@updateexamdetail')->middleware('auth:teachers');
Route::get('/deleteexamdetail/{e}','MyController@deleteexamdetail')->middleware('auth:teachers');

Route::get('/resetpasswordT','MyController@resetpasswordT');
Route::get('/confirmpasswordT','MyController@confirmpasswordT');

Route::get('/resetpasswordS','MyController@resetpasswordS');
Route::get('/confirmpasswordS','MyController@confirmpasswordS');
Route::post('/fpt','Fpt@sendResetLinkEmail');
Route::post('/fps','Fps@sendResetLinkEmail');

Route::get('password/reset/{token}','Rps@showResetForm');
Route::get('password/reset/','Rps@showResetForm');
Route::post('password/reset','Rps@reset')->name('password.reset');
