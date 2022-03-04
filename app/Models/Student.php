<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;

class Student extends Model
{
    use HasFactory;
    use HasTrixRichText;

    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'first_writing', 'second_writing'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function note()
    {
        return $this->hasOne(Note::class);
    }
}
