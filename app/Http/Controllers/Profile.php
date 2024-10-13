<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;
use App\Models\Story;


class Profile extends Controller
{
    public function profile(){
        return view('Profile');
    }
    
    

   
    public function show()
    {
        $user = Auth::user();
        $userId = Auth::id();
        if( $user){
        $stories = Story::whereHas('users', function ($query) use ($userId) {
            $query->where('users.id', $userId);
        })->get();
        $totalStory=count( $stories);
        return view('Profile', ['user' => $user, 'totalStory' => $totalStory]);
    }
        else  return view('Login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    
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
