<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
        $students = Student::paginate(5);
        return view('students.index', [
            'students'=> $students,
            ]);
        }


        public function show()
    {
        //first 
       //take the id from url param
       $request = request();
       $studentId = $request->student;
        //sec
       //query to retrieve the student by id
       $student = student::find($studentId);
      
        //theard
        //key->value 
       //send the value to the view
       return view('students.show',[
           'student' => $student,
       ]);


       
    }
}
