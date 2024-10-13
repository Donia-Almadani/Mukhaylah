<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function login(){
        return view('Login');
    }


    
    public function loginPost(Request $request){
        $messages = [
            'email.required' => 'حقل البريد الإلكتروني مطلوب',
            'password.required' => 'حقل كلمة المرور مطلوب'
        ];
    
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], $messages);
    
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'))->with("success","تم تسجيل الدخول بنجاح");
        }
    
        return redirect()->intended(route('login'))->with("error","المعلومات المدخلة خاطئة");
    }
    
    
    function logout(){
        
        Auth::logout(); // Log out the user
        return redirect()->route('login'); 
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
