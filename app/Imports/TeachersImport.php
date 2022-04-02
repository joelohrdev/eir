<?php

namespace App\Imports;

use App\Models\TeacherInfo;
use Maatwebsite\Excel\Concerns\ToModel;

class TeachersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TeacherInfo([
            'school_code' => $row[0],
            'email'     => $row[1],
            'code'      => $row[2],
            'grade'     => $row[3],
            'is_admin'  => $row[4],
        ]);
    }
}
