<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function decrement()
    {
        $this->count = max(1, $this->count - 1);
    }

    public function resetCounter()
    {
        $this->count = 1;
    }

    public function render()
    {
        return view('livewire.counter');
    }
}
