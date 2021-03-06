<?php

namespace App\Http\Controllers;

use App\Models\TeacherInfo;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use PHPUnit\TextUI\Exception;
use Socialite;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            $findUser = User::where('social_id', $user->id)->first();
            $validTeacher = TeacherInfo::where('email', $user->email)->first();
            if($findUser) {
                Auth::login($findUser);
            } elseif($validTeacher) {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id' => $user->id,
                    'school_code' => $validTeacher->school_code,
                    'code' => $validTeacher->code,
                    'grade' => $validTeacher->grade,
                    'password' => encrypt('5eoi14i9PiYd'),
                ]);
                Auth::login($newUser);
            }
            return redirect('/dashboard');
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
