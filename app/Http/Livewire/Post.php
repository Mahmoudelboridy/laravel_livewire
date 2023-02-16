<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $title;
    public $body;
    public function mount(){
        $this->title="hellow laravel 10";
        $this->body="this is my laravel and livewire";
    }
    public function render()
    {
        return view('livewire.post');
    }
}