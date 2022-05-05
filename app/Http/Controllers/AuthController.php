<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if($res)
        {
            return back()->with('Success','You have successfully Registered');
        }
        else
        {
            return back()->with('Fail','Something went wrong');
        }
        
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->Session()->put('loginId',$user->id);
                return redirect('add-post');
            }
            else
            {
                return back()->with('fail','Password not matches');
            }
        }
        else
        {
            return back()->with('fail','This email is not registered');
        }
    }
    public function logout()
    {
        if(Session::has('loginId'))
        {
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
