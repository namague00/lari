<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Displaypage extends Component
{
    public $runner;

    public function render()
    {
        $bib = Session::get('search');

        $this->runner = [];
        if ($bib) {
            $this->runner = DB::table('runer')->where('bib', $bib)->orWhere('name', $bib)->first();
        }

        return view('livewire.displaypage', [
            'runner' => $this->runner
        ]);
    }
}