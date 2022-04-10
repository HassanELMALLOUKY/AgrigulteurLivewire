<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use Livewire\Component;

class FirstLivewire extends Component
{   private $question1=null;
    public function render()
    {
        return view('livewire.first-livewire',['question1'=>$this->question1]);
    }
    public function Question1(){
       $this->question1=Agriculteur::all("1")->orderBy("Agr_Nom")->get();
    }
}
