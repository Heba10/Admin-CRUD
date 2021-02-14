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
}
