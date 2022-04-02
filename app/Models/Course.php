<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'school_code',
        'name',
        'code'
    ];

    public function school()
    {
        return $this->belongsTo(School::class, 'code', 'school_code');
    }

    public function teacher()
    {
        return $this->hasOne(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

}
