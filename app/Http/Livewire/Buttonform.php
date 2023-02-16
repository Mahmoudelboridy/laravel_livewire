<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Buttonform extends Component
{
    public $message;
 
    public function button(){
        $this->message='form subbmitted succefuly';
    }

    public function render()
    {
        return view('livewire.buttonform');
    }
}