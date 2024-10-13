<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Story;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Controller
{
        public function index()
        {
            $myStories = Rooms::with(['story'])->where(function ($query) {
                $query->where('owner', Auth::id())
                    ->orWhere('partner', Auth::id());})
                ->where('owner_story','!=',null)
                ->where('partner_story','!=',null)->get();
            return view('dashboard')->with('myStories', $myStories);
        }
    public function createRoom()
    {
        do{
            $room_no = $this->generateRandomString(8);
            $check = Rooms::where('room_no', $room_no)->exists();
        }while($check);

        $room = new Rooms();
        $room->room_no = $room_no;
        $room->owner = Auth::user()->id;

        $room->save();

        return redirect('/dashboardRoom/'.$room->room_no);

    }

    public function DashboardRoom($id)
    {
        $room = Rooms::where('room_no', $id)->with(['ownerDetail', 'partnerDetail'])->first();
        if ($room->owner_story !== null && $room->partner_story !== null) {
            return redirect('/showStory/'.$room->story_id.'/'.$room->room_no);

        }else{

            return view('dashboardRoom')->with('room', $room);
        }
    }
    function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function enterRoom(Request $request)
    {
        $room = Rooms::where('room_no', $request->roomNo)->with(['ownerDetail', 'partnerDetail'])->first();

        if ($room === null) {
            $request->session()->flash('status', 'Error Room No!');
            return redirect('/dashboard');
        }

        if ($room->partner === Auth::user()->id || $room->partner === null || Auth::user()->id === $room->owner) {
            if ((int)Auth::user()->id !== (int)$room->owner) {
                $room->partner = Auth::user()->id;
                $room->save();
                $request->session()->flash('status', 'successfuly Join Room ');

            }
        }else{
            $request->session()->flash('status', 'This is not your room!');
            return redirect('/dashboard');
        }
        if ($room->story_id !== null)
        {
            return redirect('/showStory/'.$room->story_id.'/'.$room->room_no);
        }
        return redirect('dashboardRoom/'.$room->room_no)->with('room', $room);
    }

    public function showStory($id,$RoomID)
    {
        $data['story'] = Story::with(['imgs'])->where('id',$id)->first();
        $data['room'] = Rooms::where('room_no', $RoomID)->with(['ownerDetail', 'partnerDetail'])->first();
        $data['room']->story_id = $id;
        $data['room']->save();
        return view('showStory')->with('data', $data);
    }
    public function startGame(Request $request)
    {

        $roomStartOnwer = Rooms::with(['ownerDetail', 'partnerDetail'])->find($request->roomID);
        $roomStartOnwer->owner_start = 1;

        $roomStartOnwer->save();
        return redirect('/showStory/'.$roomStartOnwer->story_id.'/'.$roomStartOnwer->room_no);
    }

    public function storeOwnerStory(Request $request)
    {
        $room = Rooms::where('id',$request->roomID)->first();
        $room->owner_start = 2;
        $room->partner_start = 1;
        $room->owner_story = $request->ownerStory;
        $room->save();
        return redirect('/showStory/'.$room->story_id.'/'.$room->room_no);
    }
    public function storePartnerStory(Request $request)
    {

        $room = Rooms::where('id',$request->roomID)->first();
        $room->partner_start = 2;
        $room->partner_story = $request->partnerStory;

        $room->save();

        return redirect('/showStory/'.$room->story_id.'/'.$room->room_no);
    }

    public function showMyStory($id)
    {
        $room = Rooms::with(['story'])->find($id);

        return view('showMyStory')->with('room', $room);
    }

    public function activityB()
    {
        return view('profile.Activity'); // Replace 'example_view' with the name of your view file
    }


}
