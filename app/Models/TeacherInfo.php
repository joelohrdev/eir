<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'teacher_id'
    ];

    public function user()
    {
        return $this->hasOne(TeacherInfo::class);
    }
}
