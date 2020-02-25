<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Hash;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //pre(Auth::user()->type);
//        if(Auth::user()->type=="ADMIN"){
//            return redirect("users");
//        }
        return view('home');
    }
    public function index1()
    {
        return view('home1');
    }
    function profile(){
        return view('user/profile');
    }
    function profileUpdate(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,'.Auth::user()->id,
        ]);
        $user= \App\User::find(Auth::user()->id);
        $user->name=$request->name;
        $user->username=$request->username;
        $user->save();
        return redirect('profile');
    }
    function profilePictureUpdate(Request $request){
        try{
            $image=upload_file($request->file('profile'),"users");
            Auth::user()->profile_picture="users/".$image;
            Auth::user()->save();
        }catch(\Exception $e){
            \Session::flash('error_message', 'Something Went wrong Please try again');
        }
        return redirect('profile');
    }
    function changePassword(Request $request){
        $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required|same:confirm_password|min:6',
        ]);
        if (\Hash::check($request->password, Auth::user()->password)) {
            Auth::user()->password=bcrypt($request->new_password);
            Auth::user()->save();
            return redirect('profile');
        }else{
            \Session::flash('error_message', 'Your Current Password is not valid please try again');
            return redirect('profile');
        }
    }
}
