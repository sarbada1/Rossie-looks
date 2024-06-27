<?php

namespace App\Livewire;

use Livewire\Component;

class BookingFormPage extends Component
{
    public $message = '';

    public function emitEvent()
    {
        // Emitting an event
        $this->emit('eventTriggered', 'Hello from Livewire');
    }
    public function render()
    {
        return view('livewire.booking-form-page');
    }
   

   

}
