<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum;
    public $message;
    public $num1;
    public $num2;

    // public function addTwoNumbers($num1,$num2){
    //     $this->sum = $num1 + $num2;
    // }
    public function DisplayMessage($msg){
        $this->message = $msg;
    }
    public function sumNum(){
        $this->sum = $this->num1 + $this->num2;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
