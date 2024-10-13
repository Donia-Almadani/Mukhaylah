<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public function render()
    {
        if ($this->count != 120)
        {
            $this->count++;
        }
        return view('livewire.counter');
    }
}
