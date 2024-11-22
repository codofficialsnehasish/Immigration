<?php

namespace App\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public $name;

    public function submit()
    {
        session()->flash('success', "Hello, $this->name!");
    }
    
    public function render()
    {
        return view('livewire.test-component');
    }
}
