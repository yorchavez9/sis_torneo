<?php

namespace App\Http\Livewire\Web;

use App\Models\Stat;
use Livewire\Component;

class PositionsLivewire extends Component{
    public function render(){
        $stats=Stat::all();
        return view('livewire.web.positions-livewire',compact('stats'));
    }
}
