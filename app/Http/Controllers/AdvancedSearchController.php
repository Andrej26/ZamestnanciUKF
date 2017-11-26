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
        $katedra=$request->katedra;
        $fakulta=$request->fakulta;
        $finaltable=[];

            foreach ($searchtable as $stable):
                $pomocna01=stripos($stable['meno'],$meno);
                $pomocna02=stripos($stable['katedra'],$katedra);

                if(($meno !==null) && ($katedra !==null) && ($fakulta !== 0)) {
                    if (($pomocna01 == true) && ($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                elseif (($meno !==null) && ($katedra !==null)){
                    if (($pomocna01 == true)  ($pomocna02 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                elseif (($katedra !==null) && ($fakulta !== 0)){
                    if (($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                elseif (($meno !==null) && ($fakulta !== 0)){
                    if (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                elseif (($meno !==null)){
                    if (($pomocna01 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                elseif (($katedra !==null)){
                    if (($pomocna02 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                else {
                    if (($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
            endforeach;

                if(($meno == null) && ($katedra == null) && ($fakulta == 0)){
                    return view('UKF.ZProfilov',['zamestnanec' => $searchtable, 'test' => 1, 'ifakulta'=>0]);
                }
                elseif(count($finaltable) == 0){
                    return view('UKF.ZProfilov',[ 'test' => 0, 'ifakulta'=>0]);
                }
                else{
                    return view('UKF.ZProfilov',['zamestnanec' => $finaltable, 'test' => 1, 'ifakulta'=>0]);
                }
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
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov,
                        'rola'=> $zam->rola, 'profil'=> $zam->profil,'idFakulta'=>$kat->Fakulta_idFakulta,'fakulta'=>$kat->nazov01];
                }
            endforeach;
        endforeach;

        return $pom;
    }
}
