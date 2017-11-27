<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Zamestnanec;
use App\Model\Katedra;
use App\Model\Fakulta;
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

                $cis01=0;
                $cis02=0;
                $cis03=0;

                if ($meno != null ){ $cis01=1; }
                if ($katedra != null ){ $cis02=1; }
                if ($fakulta != 0 ){ $cis03=1; }


                if(($cis01==1)&&($cis02==1)&&($cis03==1)) {
                    if (($pomocna01 == true) && ($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                if((($cis01!=1)&&($cis02==1)&&($cis03==1))||(($cis01==1)&&($cis02!=1)&&($cis03==1))||(($cis01==1)&&($cis02==1)&&($cis03!=1))) {
                    if (($pomocna01 == true) && ($pomocna02 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                if((($cis01==1)&&($cis02!=1)&&($cis03!=1)))
                {
                    if (($pomocna01 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna02 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
            endforeach;

                if(($meno == null) && ($katedra == null) && ($fakulta == 0)){
                    return view('UKF.ZProfilov',['zamestnanec' => $searchtable, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
                }
                elseif(count($finaltable) == 0){
                    return view('UKF.ZProfilov',[ 'test' => 0, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
                }
                else{
                    return view('UKF.ZProfilov',['zamestnanec' => $finaltable, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
               }
         }

    public function advancesearch01(Request $request)
    {
        $searchtable=$this->spojenie2tabuliek();
        $meno=$request->meno;
        $katedra=$request->katedra;
        $fakulta=$request->fakulta;
        $finaltable=[];


        foreach ($searchtable as $stable):
            $pomocna01=stripos($stable['meno'],$meno);
            $pomocna02=stripos($stable['katedra'],$katedra);

            $cis01=0;
            $cis02=0;
            $cis03=0;

            if ($meno != null ){ $cis01=1; }
            if ($katedra != null ){ $cis02=1; }
            if ($fakulta != 0 ){ $cis03=1; }


            if(($cis01==1)&&($cis02==1)&&($cis03==1)) {
                if (($pomocna01 == true) && ($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }

            if((($cis01!=1)&&($cis02==1)&&($cis03==1))||(($cis01==1)&&($cis02!=1)&&($cis03==1))||(($cis01==1)&&($cis02==1)&&($cis03!=1))) {
                if (($pomocna01 == true) && ($pomocna02 == true)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna02 == true) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }

            if((($cis01==1)&&($cis02!=1)&&($cis03!=1)))
            {
                if (($pomocna01 == true)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna02 == true)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }
        endforeach;

        if(($meno == null) && ($katedra == null) && ($fakulta == 0)){
            return view('Zam.ZProfilov',['zamestnanec' => $searchtable, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
        }
        elseif(count($finaltable) == 0){
            return view('Zam.ZProfilov',[ 'test' => 0, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
        }
        else{
            return view('Zam.ZProfilov',['zamestnanec' => $finaltable, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty()]);
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

    public function fakulty()
    {
        $fak01 =[];

        $fak02 =Fakulta::select('idFakulta' , 'nazov')
            ->groupBy('nazov','idFakulta')
            ->limit('5')
            ->get();

        $fak01[0] = '...';

        foreach ( $fak02 as $fakulta):
            $fak01[$fakulta->idFakulta] = $fakulta->nazov;
        endforeach;

        return $fak01;
    }
}
