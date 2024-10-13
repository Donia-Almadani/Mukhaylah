<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use app\Models\Story;
use app\Models\user;

class PictureGuessing extends Controller
{
    public function PictureGuessing1(Request $request){
        return view('PictureGuessing1');
    }
    public function PictureGuessing2(Request $request){
        return view('PictureGuessing2');
    }
    public function PictureGuessing3(Request $request){
        return view('PictureGuessing3');
    }
 
    public function savestory3(Request $request){
      
        $messages = [
            'story.required' => 'أكتب أولا القصة ثم قم بالحفظ'
        ];
    
        $request->validate([
            'story'=>'required',
        ], $messages);

        $user = Auth::user();
        $title="ليلى والذئب";

        
       if($user){
        $story = new \App\Models\Story;
        $story->story =  $request->story;
        $story->title= $title;
        $story->save();
    
        DB::table('story_user')->insert([
            'user_id' => $user->id,
            'story_id' => $story->id,
        ]);
        if($story){
            return redirect()->intended(route('myStory'))->with("success","  تم حفظ قصتك بنجاح ");
          
        }return redirect()->back()->with("error", "لم تكتب شي "); 
        
     }else  return view('Login');
       
    }



    
    public function savestory2(Request $request){
        $messages = [
            'story.required' => 'أكتب أولا القصة ثم قم بالحفظ'
        ];
    
        $request->validate([
            'story'=>'required',
        ], $messages);

    
        $user = Auth::user();
        $title="الفيل الأبيض";

     
       if($user){
        $story = new \App\Models\Story;
        $story->story = $request->story;
        $story->title= $title;
        $story->save();
    
        DB::table('story_user')->insert([
            'user_id' => $user->id,
            'story_id' => $story->id,
        ]);
        if($story){
            return redirect()->intended(route('myStory'))->with("success","  تم حفظ قصتك بنجاح ");
          
        }return redirect()->back()->with("error", "لم تكتب شي "); 
        
     }else  return view('Login');
       
    }


    

    
    public function savestory1(Request $request){
        $messages = [
            'story.required' => 'أكتب أولا القصة ثم قم بالحفظ'
        ];
    
        $request->validate([
            'story'=>'required',
        ], $messages);

    
        $user = Auth::user();
        $title="الأرانب الأربعة";

        
       
       if($user){
        $story = new \App\Models\Story;
        $story->story =  $request->story;
        $story->title= $title;
        $story->save();
    
        DB::table('story_user')->insert([
            'user_id' => $user->id,
            'story_id' => $story->id,
        ]);
        if($story){
            return redirect()->intended(route('myStory'))->with("success","  تم حفظ قصتك بنجاح ");
          
        }return redirect()->back()->with("error", "لم تكتب شي "); 
        
     }else  return view('Login');
       
    }

}  
