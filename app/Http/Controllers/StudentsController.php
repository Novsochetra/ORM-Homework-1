<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student as Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return $students;
        
    }

    public function store(Request $request)
    {
        $student = Student::create(['first_name' => 'sochetra new ', 'last_name' => 'NOV', 'school_id' => '1']);
    }

    public function show($id)
    {
        // $student = Student::find(1);
        $student = Student::whereFirstName('sochetra')->get();

        return $student;
    }

    public function update(Request $request, $id)
    {
        //
        $student = Student::whereFirstName('sochetra')->update(['first_name' => 'sochetra update']);
        return $student;
    }

    public function destroy($id)
    {
        //
        $student = Student::whereFirstName('sochetra 1')->delete();
        return $student;
    }
}
