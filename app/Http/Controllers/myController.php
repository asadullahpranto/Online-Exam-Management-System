<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Relation\HomeCard;
use App\Relation\Teacher;
use App\Relation\Student;
use App\Relation\ExamDetail;
use App\Relation\Question;

class myController extends Controller
{


    public function homepage()
    {
        $card=HomeCard::orderBy('id','desc')->get();
        return  view('homepage')->with('card',$card);
    }

    public function teacher()
    {
      return view('teacher');
    }

    public function teacherInformation(Request $request)
    {
      //Check Validation
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:teachers|same:confirm-email',
        'confirm-email' => 'required|email',
        'password' => 'required|min:5|max:20|same:confirm-password',
        'confirm-password' => 'required|min:3|max:20',
        'institution' => 'required',
        'department' => 'required',
        'teacherID' => 'required|unique:teachers',
        'contact' => 'required',
      ]);

      //validation end

        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = \Hash::make($request->password);
        $teacher->institution = $request->institution;
        $teacher->department = $request->department;
        $teacher->designation = $request->designation;
        $teacher->teacherID = $request->teacherID;
        $teacher->contact = $request->contact;
        $teacher->gender = $request->gender;
        $teacher->image = $request->image;


        $teacher->save();
        return redirect()->route('teacherLogin');

        //return view('teacher');
    }

    public function about()
    {
      return view('about');
    }

    public function upcomingExam()
    {
      $exam_details = \App\Relation\ExamDetail::where('starts','>',time())->get();
      return view('upcomingExam')->with(['es' => $exam_details]);
    }

    public function ongoingExam()
    {
      //dd(time());
      $exam_details = \App\Relation\ExamDetail::where('ends','>',time())->where('starts','<',time())->get();
      //dd($exam_details);
      return view('ongoingExam')->with(['es' => $exam_details]);
    }

    public function previousExam()
    {
      $exam_details = \App\Relation\ExamDetail::where('ends','<',time())->get();
      return view('previousExam')->with(['es' => $exam_details]);
    }

    public function noticeBoard()
    {
      return view('noticeBoard');
    }

    public function viaEmail()
    {
      return view('viaEmail');
    }

    public function viaMessenger()
    {
      return view('viaMessenger');
    }

    public function viaPhone()
    {
      return view('viaPhone');
    }

    public function student()
    {
      return view('student');
    }

    public function studentInformation(Request $request)
    {
      //Check Validation
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email|unique:students|same:confirm-email',
        'confirm-email' => 'required|email',
        'password' => 'required|min:5|max:20|same:confirm-password',
        'confirm-password' => 'required|min:3|max:20',
        'institution' => 'required',
        'department' => 'required',
        'registration' => 'required|unique:students',
        'year' => 'required',
        'semester' => 'required',
        'contact' => 'required|unique:students',
        'gender' => 'required',
      ]);

      //validation end

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = \Hash::make($request->password);
        $student->institution = $request->institution;
        $student->department = $request->department;
        $student->registration = $request->registration;
        $student->year = $request->year;
        $student->semester = $request->semester;
        $student->contact = $request->contact;
        $student->gender = $request->gender;
        $student->image = $request->image;


        $student->save();
        return redirect()->route('studentLogin');

        //return view('teacher');
    }


    public function developer()
    {
      return view('developer');
    }

    public function copyright()
    {
      return view('copyright');
    }

    public function privacy()
    {
      return view('privacy');
    }

    public function contact()
    {
      return view('contact');
    }

    public function settings()
    {
      return view('settings');
    }

    public function logout()
    {
      if(\Auth::guard('students')->check())
        \Auth::guard('students')->logout();
      if(\Auth::guard('teachers')->check())
          \Auth::guard('teachers')->logout();

      return redirect('/homepage');
    }

    public function teacherdash()
    {
      return view('teacherdash');
    }

    public function studentno()
    {
      return view('studentno')->with(['es'=>\Auth::guard('teachers')->user()->exam_details]);
    }

    public function examlistTeacher()
    {
      return view('examlistTeacher')->with(['es'=>\Auth::guard('teachers')->user()->exam_details]);
    }

    public function examname()
    {
      return view('examname');
    }

    public function examDetailInformation(Request $request)
    {
      //Check Validation
      $this->validate($request, [
        'examtitle' => 'required',
        'examcode' => 'required',
        'examdate' => 'required',
        'examtime' => 'required',
        'marks' => 'required',
        'totaltime' => 'required'
      ]);

      //validation end

        $examdetail = new ExamDetail;
        $examdetail->examtitle = $request->examtitle;
        $examdetail->examcode = $request->examcode;
        $examdetail->examdate = $request->examdate;
        $examdetail->examtime = $request->examtime;
        $examdetail->marks = $request->marks;
        $examdetail->totaltime = $request->totaltime;
        $str_time = $request->examtime;

        sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

        $time_seconds = isset($hours) ? $hours * 3600 + $minutes * 60 + $seconds : $minutes * 60 + $seconds;
        $examdetail->starts = strtotime($request->examdate) + $time_seconds - 6*3600;
        $examdetail->ends = strtotime($request->examdate) + $time_seconds + 60*$request->totaltime - 6*3600;
        // $examdetail->starts = strtotime()



        \Auth::guard('teachers')->user()->exam_details()->save($examdetail);
        $request->session()->put(['e'=>$examdetail]);
        return redirect()->route('createexam');

        //return view('teacher');
    }

    public function examtrash()
    {
      return view('examtrash');
    }

    public function studentDash()
    {
      return view('studentDash');
    }

    public function examlist()
    {
      return view('examlist')->with(['es'=>\App\Relation\ExamDetail::all()]);
    }

    public function examresult()
    {
      return view('examresult')->with([
        'es' => \App\Relation\ExamDetail::all(),
      ]);
    }

    public function homeworklist()
    {
      return view('homeworklist');
    }

    public function homeworkresult()
    {
      return view('homeworkresult');
    }

    public function coursewisestudentlist()
    {
      return view('coursewisestudentlist');
    }

    public function overollstudentlist()
    {
      return view('overollstudentlist');
    }

    public function rankcoursewise()
    {
      return view('rankcoursewise');
    }

    public function rankoverall()
    {
      return view('rankoverall');
    }

    public function teacherLogin()
    {
      return view('teacherLogin');
    }
    public function questionsN(\App\Relation\ExamDetail $e){
      return view('questions')->with(['qs'=>$e->questions,'e'=>$e]);
    }

    public function teacherLoginPost(Request $request)
    {
      $credentials = $request->only('email', 'password');
      //dd($credentials);
        if (\Auth::guard('teachers')->attempt($credentials)) {
            // Authentication passed...

            return redirect('/teacherdash');
        }

        session()->flash('f',1);
        // dd(session('f'));
        return redirect()->back();
    }

    public function studentLogin()
    {
      return view('studentLogin');
    }

    public function studentLoginPost(Request $request)
    {
      $request->validate([
        'email' => 'email|required',
      ]);
      $credentials = $request->only('email', 'password');
      //dd($credentials);
        if (\Auth::guard('students')->attempt($credentials)) {
            // Authentication passed...
            return redirect('/studentDash');
        }
        session()->flash('f',1);
        // dd(session('f'));
        return redirect()->back();
    }



    public function import()
    {
      return view('import');
    }

    public function export()
    {
      return view('export');
    }

    public function createexam()
    {
      return view('createexam');
    }

    public function createexamInformation(Request $request)
    {
      //Check Validation
      $this->validate($request, [
        'question' => 'required',
        'option_a' => 'required',
        'option_b' => 'required',
        'option_c' => 'required',
        'option_d' => 'required',
        'answer' => 'required'
      ]);

      //validation end

        $question = new Question;
        $question->question = $request->question;
        $question->a = $request->option_a;
        $question->b = $request->option_b;
        $question->c = $request->option_c;
        $question->d = $request->option_d;

        $question->answer = $request->answer;



        //$question->save();
        session('e')->questions()->save($question);
        return redirect()->route('createexam');

        //return view('teacher');
    }
    public function create()
    {
      return view('create');
    }

    public function giveexam(\App\Relation\ExamDetail $exam_detail)
    {
      $time = time();


      // dd($exam_ends);
      // future
      //$exam_details = \App\Relation\ExamDetail::where('ends','<',time())->get();
      if($time<$exam_detail->starts){
        session()->flash('f',1);
         return redirect()->back();
       }

      return view('giveexam')->with(['e'=>$exam_detail->load('questions')]);
    }
    //

    public function noticeHome()
    {
      return view('noticeHome');
    }

    public function ongoingHome()
    {

      $exam_details = \App\Relation\ExamDetail::where('ends','>',time())->where('starts','<',time())->get();
      return view('ongoingHome')->with(['es' => $exam_details]);

    }

    public function upcomingHome()
    {
      $exam_details = \App\Relation\ExamDetail::where('starts','>',time())->get();
      return view('upcomingHome')->with(['es' => $exam_details]);
    }

    public function previousHome()
    {


      $exam_details = \App\Relation\ExamDetail::where('ends','<',time())->get();


      return view('previousHome')->with(['es' => $exam_details]);
    }

    public function aboutHome()
    {
      return view('aboutHome');
    }

    //

    public function dt()
    {
      return view('foot-t.dt');
    }

    public function ct()
    {
      return view('foot-t.ct');
    }

    public function ppt()
    {
      return view('foot-t.ppt');
    }

    public function cot()
    {
      return view('foot-t.cot');
    }

    //

    public function ds()
    {
      return view('foot-s.ds');
    }

    public function cs()
    {
      return view('foot-s.cs');
    }

    public function pps()
    {
      return view('foot-s.pps');
    }

    public function cos()
    {
      return view('foot-s.cos');
    }

    public function questions()
    {
      //if(!\Auth::check()) //abort(404);//return view();

      //return view('/loginfirst');
      ///complete korte hobe

      $questions = session('e')->questions;
      // session()->forget('e');

      return view('questions')->with(['qs'=>$questions,
      'e'=> session('e')
    ]);
    }

    public function loginfirst()
    {
      return view('loginfirst');
    }

    public function giveexaminfo(Request $request,\App\Relation\ExamDetail $exam_detail)
    {


      $time = time();
      $exam_ends = strtotime($exam_detail->examtime) + 60*$exam_detail->totaltime;


      $marks = 0;

      foreach($exam_detail->questions as $q){
        $a = $q->id;
        $b = 'q'.$a;
        // dd($b);
        if($q->answer==$request->$b) $marks++;
      }
      $result = new \App\Relation\Result;
      $result->score = $marks;
      $result->student_id = \Auth::guard('students')->id();
      $result->exam_detail_id = $exam_detail->id;
      if($time<$exam_ends) {
        //dd($time);
        $rs = \App\Relation\Result::where('student_id', \Auth::guard('students')->id())->where('exam_detail_id'
        , $exam_detail->id)->exist();

        if(!$rs)
        $result->save();
      }

      return view('/view_result')->with([
        'marks' => $marks,
        'e' => $exam_detail->load('questions'),
      ]);
    }
    public function viewrank(\App\Relation\ExamDetail $exam_detail){
      $results = \App\Relation\Result::orderBy('score','desc')
      ->where('exam_detail_id',$exam_detail->id)->get();
      return view('viewrank')->with([
        'rs' => $results,
      ]);
    }

    public function viewrankT(\App\Relation\ExamDetail $e){
      $results = \App\Relation\Result::orderBy('score','desc')
      ->where('exam_detail_id',$e->id)->get();
      return view('viewrankT')->with([
        'rs' => $results,
      ]);
    }

    public function examlistforrank()
    {
      return view('examlistforrank')->with(['es'=>\Auth::guard('teachers')->user()->exam_details]);
    }

    public function viewstudent(\App\Relation\ExamDetail $exam_detail)
    {
      // dd($exam_detail->results);

      return view('viewstudent')->with(['e'=>$exam_detail->load('results.student')]);
    }
    public function editquestion( \App\Relation\Question $q){
      return view('editquestion')->with([
        'q'=>$q,
      ]);
    }

    public function updatequestion(Request $request,\App\Relation\Question $q)
    {
      $q->question = $request->question;
      $q->a = $request->option_a;
      $q->b = $request->option_b;
      $q->c = $request->option_c;
      $q->d = $request->option_d;
      $q->answer = $request->answer;
      $q->save();

      return redirect('/questions/'.$q->exam_detail_id);


    }

    public function deletequestion(\App\Relation\Question $q)
    {

      $q->delete();

      return redirect()->back();


    }

    public function editexamdetail( \App\Relation\ExamDetail $e){
      return view('editexamdetail')->with([
        'e'=>$e,
      ]);
    }

    public function updateexamdetail(Request $request,\App\Relation\ExamDetail $e)
    {
      $e->examtitle = $request->examtitle;
      $e->examcode = $request->examcode;
      $e->examdate = $request->examdate;
      $e->examtime = $request->examtime;
      $e->marks = $request->marks;
      $e->totaltime = $request->totaltime;
      $str_time = $request->examtime;

      sscanf($str_time, "%d:%d:%d", $hours, $minutes, $seconds);

      $time_seconds = isset($hours) ? $hours * 3600 + $minutes * 60 + $seconds : $minutes * 60 + $seconds;
      $e->starts = strtotime($request->examdate) + $time_seconds - 6*3600;
      $e->ends = strtotime($request->examdate) + $time_seconds + 60*$request->totaltime - 6*3600;

      $e->save();

      return redirect('/questions/'.$e->id);


    }
    public function deleteexamdetail(\App\Relation\ExamDetail $e){
      $e->questions()->delete();
      $e->delete();
      return redirect('/examlistTeacher');
    }

    public function resetpasswordT()
    {
      return view('resetpasswordT');
    }
    public function confirmpasswordT()
    {
      return view('confirmpasswordT');
    }

    public function resetpasswordS()
    {
      return view('resetpasswordS');
    }
    public function confirmpasswordS()
    {
      return view('confirmpasswordS');
    }
    public function exportquestion()
    {
      return view('exportquestion')->with(['es'=>\Auth::guard('teachers')->user()->exam_details]);
    }

    public function exportquestionview(\App\Relation\ExamDetail $e)
    {
      return view('exportquestionview')->with(['qs'=>$e->questions,'e'=>$e]);
    }

    public function addquestion(\App\Relation\ExamDetail $e)
    {
      return view('addquestion')->with(['e'=>$e]);
    }
    public function addquestionPost(Request $request,\App\Relation\ExamDetail $e)
    {
      $q = new \App\Relation\Question;
      $q->question = $request->question;
      $q->a = $request->option_a;
      $q->b = $request->option_b;
      $q->c = $request->option_c;
      $q->d = $request->option_d;
      $q->answer = $request->answer;
      $q->exam_detail_id = $e->id;
      $q->save();


      return redirect('/questions/'.$e->id);
    }

}
