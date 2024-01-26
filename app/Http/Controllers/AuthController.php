<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\ForgetPasswordMail;
use App\Http\Requests\ResetPassword;


class AuthController extends Controller
{
    public function login()
    {
        // $password = Hash::make('123456');
        // $2y$12$ihHuCtdZHV.NwckIkwOq.uUh6g4.uLYvVVWiAxa3cQhpEf3TbPTPS
        // dd($password);
        return view('auth.login');
    }


    public function forgot()
    {
        return view('auth.forgot');
    }


    
    public function login_post(Request $request)
    {
        // dd($request->all());

        if(Auth::attempt(['email' => $request -> email, 'password' => $request -> password], true))
        {
            if(Auth::User() -> is_role == '1')
            {
                return redirect()->intended('admin/dashboard');
            }
            else
            {
                return redirect()->back()->with('error', 'Please enter the correct credentials...');
            }
        }
        else
        {
            return redirect()->back()->with('error', 'Please enter the correct credentials...');
        }
            
    }



    public function forgot_post(Request $request)
    {
        // dd($request->all());

        $count = User::where('email','=', $request->email)->count();
        if($count > 0)
        {
            // dd("DDDD");

            $user = User::where('email','=', $request->email)->first();
            $user -> remember_token = Str::random(50);
            $user -> save();
            
            Mail::to($user->email)->send(new ForgetPasswordMail($user));

            return redirect()->back()->with('success', 'Password has been reset..Please check your email...');
        }
        else
        {
            return redirect()->back()->withInput()->with('error', 'Email not found in the system...');
        }

    }


    
    public function getReset($token)
    {
    //    dd($token); 

        if(Auth::check())
        {
            return redirect('admin/dashboard');
        }

        $user = User::where('remember_token','=', $token);
        if($user->count() == 0)
        {
            abort(403);
        }
        else
        {
            $user = $user->first();
            $data['token'] = $token;

            return view('auth.reset', $data);

        }

    }


    public function postReset($token, ResetPassword $request)
    {
        $user = User::where('remember_token','=' , $token);
        if($user->count() == 0)
        {
            abort(403);
        }

        $user = $user->first();
        $user ->password = Hash::make($request ->password);
        $user -> remember_token = Str::random(50);
        $user -> save();

        return redirect('/')->with('success', 'Password has been reset...');
        
    }
    
    



    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }
    
    
    
}
