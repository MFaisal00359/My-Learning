<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $nama1 = 'Faisal';
    public $nama2 = 'Kevin';
    public $nama3 = 'Heni';
    public $nama4 = 'Giovanni';
    public $nama5 = 'Qaisya';
    public $nama6 = 'Marsella';

    public function render()
    {
        return view('livewire.home-page');
    }
}
