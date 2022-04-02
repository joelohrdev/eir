<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_code', 'first_name', 'last_name'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'teacher_code', 'code');
    }

    public function sampleOne()
    {
        return $this->hasOne(SampleOne::class);
    }

    public function sampleTwo()
    {
        return $this->hasOne(SampleTwo::class);
    }

    public function note()
    {
        return $this->hasOne(Note::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
