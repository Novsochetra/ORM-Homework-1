<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School as School;

class SchoolController extends Controller
{
    public function index()
    {
        $schools = School::all();
        return $schools;
        
    }

    public function store(Request $request)
    {
        $school = School::create(['name' => 'PNC']);
        return $school;
    }

    public function show($id)
    {
        $school = School::find(1);
        return School::find(1)->students;

        // return $school;
    }
}
