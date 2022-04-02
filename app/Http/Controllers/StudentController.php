<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use App\Models\Student;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{

    public function sampleOne(Student $student)
    {
        return view('student.sample-one', [
            'student' => $student
        ]);
    }

    public function sampleTwo(Student $student)
    {
        return view('student.sample-two', [
            'student' => $student
        ]);
    }

}
