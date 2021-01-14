<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\datain;

class ShowData extends Component
{
    public $data;

    public function render()
    {
        $this->data=datain::orderBy('id', 'desc')->get();
        return view('livewire.show-data');
    }


}

