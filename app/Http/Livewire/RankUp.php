<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ranking;

class RankUp extends Component
{
    public function render()
    {
        $hola=Ranking::orderBy('PUNTUACION', 'DESC')->get();

        return view('livewire.rank-up', compact('hola'));
    }

}
