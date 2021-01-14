<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\datain;

class AddData extends Component
{
    public $kuchbhi, $password;
    public $event;

    public function render()
    {
        return view('livewire.add-data');
    }
public function edit($event)
{
    $this->event=null;
    if($event)
    {
        $this->event=$event;
        $this->name=$this->event->name;
        $this->password=$this->event->password;
    }
}
    public function store()
    {

        $this->validate([
            'kuchbhi' => 'required',
            'password' => 'required'
        ]);


        datain::Create([
            'name' => $this->kuchbhi,
            'password' => $this->password
        ]);

        session()->flash(
            'm',
            'Data Created Successfully.'
        );

        $this->kuchbhi='';
        $this->password='';
    }
}
