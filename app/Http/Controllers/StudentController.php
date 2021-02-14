<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    //index
    public function index() {
        $students = Student::paginate(5);
        return view('students.index', [
            'students'=> $students,
            ]);
        }

    //show
    public function show()
    {
        //first 
       //take the id from url param
       $request = request();
       $studentId = $request->student;
        //sec
       //query to retrieve the student by id
       $student = Student::find($studentId);
      
        //theard
        //key->value 
       //send the value to the view
       return view('students.show',[
           'student' => $student,
       ]);


       
    }




    //create & store
    public function create()
    {
    

        return view('students.create');
    }

    public function store()
    {
         //get the request data
         $request = request();

         //store the request data in the db
         Student::create([
             'name' => $request->name,
             'email' => $request->email,
             'speciality' =>  $request->speciality,
             'password' =>  $request->password,
            
         ]);

         return redirect()->route('students.index');
    }






}
