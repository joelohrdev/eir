<?php

namespace App\Http\Controllers;

use App\Imports\CoursesImport;
use App\Imports\SchoolsImport;
use App\Imports\StudentsImport;
use App\Imports\TeachersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function fullImport()
    {
        Excel::import(new SchoolsImport, 'schools.xlsx');
        Excel::import(new CoursesImport, 'courses.xlsx');
        Excel::import(new TeachersImport, 'teachers.xlsx');
        Excel::import(new StudentsImport, 'students.xlsx');

        return view('welcome');
    }

}
