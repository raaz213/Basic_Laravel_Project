<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $user = User::where(['email'=>$request->email])->first();
        if($user || Hash::check($request->password,$user->password)){
           $request->session()->put('user',$user);
           return redirect('/'); 
        }else{
            return "Incorrect username or password";
        }
    }
    public function register(){
        return view('register');
    }
    public function registerUser(Request $req){
       $user = new User;
       $user->name = $req->name;
       $user->email = $req->email;
       $user->password = Hash::make($req->password);
       $user->save();
       return redirect('login');
    }
}
