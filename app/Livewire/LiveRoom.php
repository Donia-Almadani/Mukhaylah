<?php

namespace App\Livewire;

use App\Models\rooms;
use Livewire\Component;

class LiveRoom extends Component
{
    public $roomDtl ;

    public function mount($roomNo)
    {
        $this->roomDtl = Rooms::with(['ownerDetail','partnerDetail'])
                        ->where('room_no',$roomNo)->first();
    }
    public function render()
    {
        return view('livewire.live-room');
    }
}
