<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use App\Models\Intervention;
use App\Models\Parcelle;
use Livewire\Component;
use Mockery\Matcher\Any;

class LivewireComponent extends Component
{   private $question1;
    private $question2;
    private $question3;
    private $question4;
    private $question5;
    public function render()

    {
        $this->question1=Agriculteur::all("Agr_Nom")->sortBy("Agr_Nom");
        $this->question2=Parcelle::where("Par_Superficie",">",500)->get();
        $this->question3=Parcelle::where("Par_Lieu","Arith","and")->whereBetween("Par_Superficie",[200,500])->get();
        $this->question4=Parcelle::join('agriculteurs', 'parcelles.agriculteur_id', '=', 'agriculteurs.id')->get(['parcelles.*','agriculteurs.Agr_Nom']);
        /*$this->question5=Intervention::join('parcelles', 'interventions.Int_Par_Id', '=', 'parcelles.id')
            ->join('employes', 'interventions.Int_Emp_Nss', '=', 'employes.Emp_Nss')
            ->get(['parcelles.Par_Nom','interventions.*','employes.Emp_Nom']);*/
        //$this->question5=Intervention::whereBetween("Int_Debut",[2011-11-07,2012-02-9])->get();
        $from = date('2011-11-07');
        $to = date('2012-02-9');
        $this->question5=Intervention::whereBetween("Int_Debut",[$from,$to])->get();
       // $this->question5=Intervention::all();
        $this->question6=Intervention::join('parcelles', 'interventions.Int_Par_Id', '=', 'parcelles.id')->get(['parcelles.Par_Nom','interventions.*']);
        $this->question7=Intervention::join('parcelles', 'interventions.Int_Par_Id', '=', 'parcelles.id')
            ->join('employes', 'interventions.Int_Emp_Nss', '=', 'employes.Emp_Nss')
            ->get(['parcelles.Par_Nom','employes.Emp_Nom','interventions.*']);
        return view('livewire.livewire-component',['question1'=>$this->question1,
            'question2'=>$this->question2,
            'question3'=>$this->question3,
            'question4'=>$this->question4,
            'question5'=>$this->question5,
            'question6'=>$this->question6,
            'question7'=>$this->question7,
            ]);
    }
}
