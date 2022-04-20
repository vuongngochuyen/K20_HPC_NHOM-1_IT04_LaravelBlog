<?php

namespace App\Http\Controllers\Pages;
use App\Models\Tablebasic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;
class AuthenController extends Controller
{

    private $uses;

    public function register(){

        return view('Pages.Authentications.Register');
    }
    // public function registerAdd(Request $request){
    //     $request->validate([
    //         'name'=>'required|min:5',
    //         'email'=>'required|email',
    //         'password'=>'required|min:8'
    //     ],[
    //         'name.required'=>'Ho ten bat buoc phai nhap',
    //         'name.min'=>'Ho ten bat buoc phai nhap tu 5 ky tu tro len',
    //         'email.required'=>'Email bat buoc phai nhap',
    //         'email.min'=>'Email khong dung dinh dang',
    //         'password.required'=>'Mat khau bat buoc phai nhap',
    //         'password.min'=>'Mat khau bat buoc phai nhap tu 8 ky tu tro len',
    //     ]);
    //     $dataInsert=[
    //         $request->name,
    //         $request->email,
    //         $request->password,
    //     ];
    //     $this->uses->addUser();
    //     return redirect()->route('name')->with('them nguoi dung thanh cong');
    // }
    public function registerAdd(Request $request){
           $user= new Tablebasic();
           $user->name=$request->input('name');
           $user->email=$request->input('email');
           $user->password=$request->input('password');
           $user->save();
           return redirect('/')->with('status','dang ky thanh cong');
      }
    public function login(){

        return view('Pages.Authentications.Login');
    }
    public function forgot(){

        return view('Pages.Authentications.ForgotPassword');
    }



}
