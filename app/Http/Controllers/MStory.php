<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\userStory;
use App\Models\Story;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class MStory extends Controller
{
    public function showUserStories()
    {
        $userId = Auth::id();
        if($userId){
        $stories = Story::whereHas('users', function ($query) use ($userId) {
            $query->where('users.id', $userId);
        })->get();

            $myStories = Rooms::with(['story'])->where(function ($query) {
                $query->where('owner', Auth::id())
                    ->orWhere('partner', Auth::id());})
                ->where('owner_story','!=',null)
                ->where('partner_story','!=',   null)->get();

        return view('MyStories', ['stories' =>$stories,'myStories'=>$myStories]);
        }
        return view('Login');


    }
    public function savestory1(Request $request){
        $request->validate([
            'story'=>'required',
        ]);

        $user = Auth::user();
        $title="ليلى والذئب";

        $storyStart=" اقترب موعد العيد السعيد لذلك أعدت أم ليلى كعكًا وأرادت أن تشارك جزء منها جدة ليلى فأرسلت ابنتها ليلى إلى جدتها بسلة فيها بعض الكعك وأوصتها قائلةً: يا ابنتي انتبهي على نفسك، واسرعي في الذهاب ولا تتأخري ولا تنشغلي عن الطريق وما وكلتك به ولا تكلمي الغرباء. ";
        $storyEnd=" عادت الجدة إلى المنزل واحتضنت ليلى التي عرفت خطأها حين لم تستمع لنصيحة امها فلم تنتبه للطريق وتحدثت مع الغرباء وندمت شديدًا وعزمت على عدم فعلها مرة أخرى. ";
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

     }else return view('login');

    }



    public function viewstory($id){
        $story = Story::find($id);
        return view('ViewStory', ['story' => $story]);
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
