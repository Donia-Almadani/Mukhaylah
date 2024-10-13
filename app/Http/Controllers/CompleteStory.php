<?php

namespace App\Http\Controllers;

use App\Models\userStory;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CompleteStory extends Controller
{

    public function completeStory1(){
        return view('CompleteStory1');
    }

    public function completeStory2(){
        return view('CompleteStory2');
    }

    public function completeStory3(){
        return view('CompleteStory3');
    }

    public function completeStory4(){
        return view('CompleteStory4');
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

         $storyStart="\"اقترب موعد العيد السعيد لذلك أعدت أم ليلى كعكًا وأرادت أن تشارك جزء منها جدة ليلى فأرسلت ابنتها ليلى إلى جدتها بسلة فيها بعض الكعك وأوصتها قائلةً: يا ابنتي انتبهي على نفسك، واسرعي في الذهاب ولا تتأخري ولا تنشغلي عن الطريق وما وكلتك به ولا تكلمي الغرباء.\" ";
        $storyEnd=" \"عادت الجدة إلى المنزل واحتضنت ليلى التي عرفت خطأها حين لم تستمع لنصيحة امها فلم تنتبه للطريق وتحدثت مع الغرباء وندمت شديدًا وعزمت على عدم فعلها مرة أخرى.\"";
       if($user){
        $story = new \App\Models\Story;
        $story->story =  $storyStart.$request->story.$storyEnd;
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

        $storyStart="\"كانت الحيوانات قبل آلاف السنين تتكلم كما يتكلم الإنسان عاش في ذاك الزمان مجموعة من الفيلة جميلة المظهر تسكن غابات الهند وقد كان أجمل الفيلة فيلٌ يدعى الحجاج ، وهو أبيض اللون، ضخم الجسد، نبيل النفس، بارا بوالدته أم شبل. كانت والدته حكيمة نبيهة ولكن الشيخوخة أتعبتها\" ";
        $storyEnd=" \"كان الملك عادلا رحيما أطلق سراح الحجاج ليعود إلى أمه. أسرع الحجاج الى والدته وجدها بخير فرحوا برؤية بعض.
        بعد ذلك اليوم نسى الحجاج غدر الحطاب وخيانته، ولكنه ظل يذكر صنيع الملك ويشكر له معروفه.\"";
       if($user){
        $story = new \App\Models\Story;
        $story->story =  $storyStart.$request->story.$storyEnd;
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

        $storyStart="\"كان الْأَرْنَبُ «نَبْهَانُ» نَائِمٌ يَحْلُمُ.
        الْعُصْفُورَةُ قَالَتْ لَهُ فِي الْحُلْمِ: «أَخُوكَ سَلْمَانُ» فِي خَطَرٍ يا «نَبْهَانُ».
        «نَبْهانُ» صَحِيَ مِنْ نَوْمِهِ لَهْفَانَ.
        «نَبْهانُ» قَعَدَ يَنْتَظِرُ عَوْدَةَ إِخْوَتِهِ الثَّلَاثَةِ.\" ";
        $storyEnd=" \"فَرْحو بِنَجَاةِ «سَلْمَانَ».
        رَجَعو إِلَى الْبَيْتِ فِي غَايَةِ الأَطْمِثْنَانِ.
        الْأَرَانِبُ الْأَرْبَعَةُ فِي الْبَيْتِ، وَالْكُلُّ فَرْحَانُ.\"
        ";
       if($user){
        $story = new \App\Models\Story;
        $story->story =  $storyStart.$request->story.$storyEnd;
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
