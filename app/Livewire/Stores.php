<?php

namespace App\Livewire;

use App\Models\Rooms;
use App\Models\Story;
use Livewire\Component;

class Stores extends Component
{
    public $stores;
    public $roomID;

    public function mount($roomNo)
    {
        $this->roomID = $roomNo;
        $myRoom = Rooms::where('room_no', $roomNo)->first();

        $this->stores = Story::all();
    }
    public function render()
    {
        return view('livewire.stores');
    }
}
