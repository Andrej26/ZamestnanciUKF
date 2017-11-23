<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Zamestnanec;
use App\Model\Katedra;
use App\Http\Controllers\Controller;

class AdvancedSearchController extends Controller
{
    public function advancesearch(Request $request)
    {
        $searchtable=$this->spojenie2tabuliek();
        $meno=$request->meno;
        $priezvisko=$request->priezvisko;
        $katedra=$request->katedra;
        $fakulta=$request->fakulta;
        $finaltable=[];
        $test=0;

        if($meno !== null) {
            $test=1;
            foreach ($searchtable as $stable):
                $pomocna=stripos($stable['meno'],$meno);
                if($pomocna == true) {
                    $finaltable[] = ['id' => $stable->idzamestnanec, 'meno' => $stable->meno, 'email' => $stable->email, 'katedra' => $stable->nazov, 'rola' => $stable->rola, 'profil' => $stable->profil];
                }
            endforeach;

        }
        else{
            return $pom=1;
           // return view('UKF.ZProfilov',['test' => $test, 'ifakulta'=>0]);
        }
        return view('UKF.ZProfilov',['zamestnanec' => $finaltable, 'test' => $test, 'ifakulta'=>0]);
    }


    public function spojenie2tabuliek()
    {
        $pom=[];

        $kat01 = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->orderBy('idKatedra', 'asc')
            ->get();

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->orderBy('idzamestnanec', 'asc')
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kat):
                if($kat['nazov'] == $zam['nazov']) {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov, 'rola'=> $zam->rola, 'profil'=> $zam->profil, 'fakulta'=>$kat->nazov01];
                }
            endforeach;
        endforeach;

        return $pom;
    }
}
