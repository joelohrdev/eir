<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_code',
        'email',
        'code',
        'grade'
    ];

    public function user()
    {
        return $this->hasOne(TeacherInfo::class);
    }
}
