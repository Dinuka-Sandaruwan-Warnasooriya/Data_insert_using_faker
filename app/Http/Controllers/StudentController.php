<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentList()
    {
        $students = Student::all();
        return $students;
    }

    
}   
