<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session;

class Runerpage extends Component
{
    public $bib;

    public function submit()
    {
        Session::put('search', $this->bib);
    }

    public function render()
    {
        return view('livewire.runerpage');
    }
}