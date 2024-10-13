<?php

namespace App\Livewire;

use App\Models\Rooms;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OwnerStart extends Component
{
    public $room;


    public function mount($roomNo)
    {
        $this->room = Rooms::with(['ownerDetail', 'partnerDetail'])->where('room_no', $roomNo)->first();

    }
    public function render()
    {
        return view('livewire.owner-start');
    }
}
