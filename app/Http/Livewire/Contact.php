<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $phone;
    public $email;
    public $msg;


    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name'    =>  'required',
            'email'    =>  'required|email',
            'phone'    =>  'required|digits:10',
            'msg'    =>  'required|min:20',
        ]);
    }


    public function submitForm()
    {
        $this->validate([
            'name'    =>  'required',
            'email'    =>  'required|email',
            'phone'    =>  'required|digits:10',
            'msg'    =>  'required|min:20',
        ]);

        dd($this->name,$this->email,$this->phone,$this->msag);
    }


    public function render()
    {
        return view('livewire.contact');
    }
}
