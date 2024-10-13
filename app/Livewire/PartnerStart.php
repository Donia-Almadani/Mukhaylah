<?php

namespace App\Livewire;

use App\Models\Rooms;
use App\Models\Store;
use Livewire\Component;

class PartnerStart extends Component
{
    public $room;
    public $story;
    public function mount($roomNo)
    {
        $this->room = Rooms::with(['ownerDetail', 'partnerDetail'])->where('room_no', $roomNo)->first();
    }
    public function render()
    {
        return view('livewire.partner-start');
    }
}
