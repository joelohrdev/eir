<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StudentController extends Controller
{
    public function fileImportExport()
    {
        return view('file-import');
    }

    public function fileImport(Request $request)
    {
        Excel::import(new StudentsImport, 'students.xlsx');
        return view('welcome');
    }
}
