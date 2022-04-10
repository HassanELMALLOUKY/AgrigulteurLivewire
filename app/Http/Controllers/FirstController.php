<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Tarif;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index(){
        $results=DB::select("SELECT * FROM tarifs;");
        //$results=(object)$resul;
        foreach ($results as $result){
            print($result);
        }
    }
}
