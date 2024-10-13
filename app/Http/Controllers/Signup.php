<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class Signup extends Controller
{
    public function signup(){
        return view('Signup');
    }
    public function signupPost(Request $request){
        $messages = [
            'username.required' => 'الاسم مطلوب',
            'email.required' => 'البريد الإلكتروني مطلوب',
            'email.email' => 'البريد الإلكتروني يجب أن يكون بصيغة صحيح',
            'email.unique' => 'البريد الإلكتروني مستخدم بالفعل',
            'password.required' => 'كلمة المرور مطلوبة',
            'password.min' => 'يجب أن تتكون كلمة المرور من 8 أحرف على الأقل',
            'confirmPassword.required' => 'تأكيد كلمة المرور مطلوب',
            'confirmPassword.same' => 'يجب أن تتطابق كلمة المرور وتأكيد كلمة المرور'
        ];
    
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password' => [
                'required',
                'min:8', // Minimum length of 8 characters
            ],
            'confirmPassword' => 'required|same:password'
        ], $messages);
     
       $data['name']=$request->username;
       $data['email']=$request->email;
       $data['password']=Hash::make($request->password);
       $user=User::create($data);
       if(!$user){
          return  redirect()->intended(route('signup'))->with("error","حصلت مشكلة أعد المحاولة");
       }
       return redirect()->intended(route('login'))->with("success"," تم عمل حسابك بنجاح, قم بتسجيل الدخول ");
    }
}