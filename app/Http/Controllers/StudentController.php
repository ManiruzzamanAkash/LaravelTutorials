<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index()
    {
      $students = Student::orderBy('registration_id', 'asc')->get();
      return view('index')->with('students', $students);
    }

    public function create()
    {
      return view('create');
    }

    public function store(Request $request)
    {
      //Insert data into Student Table
      $student = new Student;
      $student->name = $request->name;
      $student->registration_id = $request->registration_id;
      $student->department_name = $request->department_name;
      $student->info = $request->info;
      $student->save();

      return redirect()->route('index');

    }
}
