<?php

namespace App\Http\Controllers;

use App\Model\Tag;
use App\Model\Zamestnanec_tag;
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
        $tagy=$request->tagy;
        $finaltable=[];


            foreach ($searchtable as $stable):
                $pomocna01=stripos($stable['meno'],$meno);

                $cis01=0;
                $cis02=0;
                $cis03=0;
                $cis04=0;
                $tag_array=[];

                $tag01=Zamestnanec_tag::select('tag_id')->where('zamestnanec_id',$stable['id'])->get();
                foreach ($tag01 as $tag02):
                    $tag_array[]= $tag02->tag_id;
                endforeach;

                if ($meno != null ){ $cis01=1; }
                if ($katedra != 0 ){ $cis02=1; }
                if ($fakulta != 0 ){ $cis03=1; }
                if ($tagy != null ){
                    $cis04=1;
                    $result_tagy=array_diff($tagy,$tag_array);}
                    else{
                        $result_tagy=-1;
                    }

                if(($cis01==1)&&($cis02==1)&&($cis03==1)&&($cis04==1)) {
                    if ( ($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta) && ($result_tagy == null) )
                    {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                if( (($cis01!=1)&&($cis02==1)&&($cis03==1)&&($cis04==1))||
                    (($cis01==1)&&($cis02!=1)&&($cis03==1)&&($cis04==1))||
                    (($cis01==1)&&($cis02==1)&&($cis03!=1)&&($cis04==1))||
                    (($cis01==1)&&($cis02==1)&&($cis03==1)&&($cis04!=1)) )
                {
                    if (($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif ( ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)&&(($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta) && (($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && (($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                if( (($cis01!=1)&&($cis02!=1)&&($cis03==1)&&($cis04==1))||
                    (($cis01!=1)&&($cis02==1)&&($cis03!=1)&&($cis04==1))||
                    (($cis01!=1)&&($cis02==1)&&($cis03==1)&&($cis04!=1))||
                    (($cis01==1)&&($cis02!=1)&&($cis03!=1)&&($cis04==1))||
                    (($cis01==1)&&($cis02!=1)&&($cis03==1)&&($cis04!=1))||
                    (($cis01==1)&&($cis02==1)&&($cis03!=1)&&($cis04!=1)) )
                {
                    if (($pomocna01 == true) && ($stable['idKatedra'] == $katedra)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif ( ($pomocna01 == true) && (($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif ( ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($stable['idKatedra'] == $katedra) && (($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($stable['idFakulta'] == $fakulta) && (($result_tagy == null)) ) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }

                if( (($cis01==1)&&($cis02!=1)&&($cis03!=1)&&($cis04!=1))||
                    (($cis01!=1)&&($cis02==1)&&($cis03!=1)&&($cis04!=1))||
                    (($cis01!=1)&&($cis02!=1)&&($cis03==1)&&($cis04!=1))||
                    (($cis01!=1)&&($cis02!=1)&&($cis03!=1)&&($cis04==1)) )
                {
                    if (($pomocna01 == true)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($stable['idKatedra'] == $katedra)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($stable['idFakulta'] == $fakulta)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                    elseif (($result_tagy == null)) {
                        $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                            'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                    }
                }
                endforeach;

                $tag02=Tag::all();
                $tag=[];
                foreach ($tag02 as $t) {
                    $tag[$t->id]= $t->name;
                }

                if(($meno == null) && ($katedra == null) && ($fakulta == 0) && ($tagy == null)){
                    return view('UKF.ZProfilov',['zamestnanec' => $searchtable, 'test' => 1, 'ifakulta'=>0, 'katedra'=>$this->katedry_zoz(), 'fakulta' =>$this->fakulty(),'tags'=> $tag, 'tagy'=>$this->tagy()]);
                }
               elseif(count($finaltable) == 0){
                    return view('UKF.ZProfilov',[ 'test' => 0, 'ifakulta'=>0, 'fakulta' =>$this->fakulty(),'katedra'=>$this->katedry_zoz(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
                }
                else{
                    return view('UKF.ZProfilov',['zamestnanec' => $finaltable, 'test' => 1, 'ifakulta'=>0,'katedra'=>$this->katedry_zoz(), 'fakulta' =>$this->fakulty(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
               }
            }

    public function advancesearch01(Request $request)
    {
        $searchtable=$this->spojenie2tabuliek();
        $meno=$request->meno;
        $katedra=$request->katedra;
        $fakulta=$request->fakulta;
        $tagy=$request->tagy;
        $finaltable=[];


        foreach ($searchtable as $stable):
            $pomocna01=stripos($stable['meno'],$meno);

            $cis01=0;
            $cis02=0;
            $cis03=0;
            $cis04=0;
            $tag_array=[];

            $tag01=Zamestnanec_tag::select('tag_id')->where('zamestnanec_id',$stable['id'])->get();
            foreach ($tag01 as $tag02):
                $tag_array[]= $tag02->tag_id;
            endforeach;

            if ($meno != null ){ $cis01=1; }
            if ($katedra != 0 ){ $cis02=1; }
            if ($fakulta != 0 ){ $cis03=1; }
            if ($tagy != null ){
                $cis04=1;
                $result_tagy=array_diff($tagy,$tag_array);}
            else{
                $result_tagy=-1;
            }

            if(($cis01==1)&&($cis02==1)&&($cis03==1)&&($cis04==1)) {
                if ( ($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta) && ($result_tagy == null) )
                {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }

            if( (($cis01!=1)&&($cis02==1)&&($cis03==1)&&($cis04==1))||
                (($cis01==1)&&($cis02!=1)&&($cis03==1)&&($cis04==1))||
                (($cis01==1)&&($cis02==1)&&($cis03!=1)&&($cis04==1))||
                (($cis01==1)&&($cis02==1)&&($cis03==1)&&($cis04!=1)) )
            {
                if (($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif ( ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)&&(($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta) && (($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna01 == true) && ($stable['idKatedra'] == $katedra) && (($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }

            if( (($cis01!=1)&&($cis02!=1)&&($cis03==1)&&($cis04==1))||
                (($cis01!=1)&&($cis02==1)&&($cis03!=1)&&($cis04==1))||
                (($cis01!=1)&&($cis02==1)&&($cis03==1)&&($cis04!=1))||
                (($cis01==1)&&($cis02!=1)&&($cis03!=1)&&($cis04==1))||
                (($cis01==1)&&($cis02!=1)&&($cis03==1)&&($cis04!=1))||
                (($cis01==1)&&($cis02==1)&&($cis03!=1)&&($cis04!=1)) )
            {
                if (($pomocna01 == true) && ($stable['idKatedra'] == $katedra)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($pomocna01 == true) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif ( ($pomocna01 == true) && (($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif ( ($stable['idKatedra'] == $katedra) && ($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($stable['idKatedra'] == $katedra) && (($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($stable['idFakulta'] == $fakulta) && (($result_tagy == null)) ) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }

            if( (($cis01==1)&&($cis02!=1)&&($cis03!=1)&&($cis04!=1))||
                (($cis01!=1)&&($cis02==1)&&($cis03!=1)&&($cis04!=1))||
                (($cis01!=1)&&($cis02!=1)&&($cis03==1)&&($cis04!=1))||
                (($cis01!=1)&&($cis02!=1)&&($cis03!=1)&&($cis04==1)) )
            {
                if (($pomocna01 == true)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($stable['idKatedra'] == $katedra)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($stable['idFakulta'] == $fakulta)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
                elseif (($result_tagy == null)) {
                    $finaltable[] = ['id' => $stable['id'], 'meno' => $stable['meno'], 'email' => $stable['email'],
                        'katedra' => $stable['katedra'], 'rola' => $stable['rola'], 'profil' => $stable['profil'], 'fakulta' => $stable['fakulta']];
                }
            }
        endforeach;

        $tag02=Tag::all();
        $tag=[];
        foreach ($tag02 as $t) {
            $tag[$t->id]= $t->name;
        }

        if(($meno == null) && ($katedra == null) && ($fakulta == 0) && ($tagy == null)){
            return view('Zam.ZProfilov',['zamestnanec' => $searchtable, 'test' => 1, 'ifakulta'=>0,'katedra'=>$this->katedry_zoz(), 'fakulta' =>$this->fakulty(),'tags'=> $tag, 'tagy'=>$this->tagy()]);
        }
        elseif(count($finaltable) == 0){
            return view('Zam.ZProfilov',[ 'test' => 0, 'ifakulta'=>0, 'fakulta' =>$this->fakulty(),'katedra'=>$this->katedry_zoz(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
        }
        else{
            return view('Zam.ZProfilov',['zamestnanec' => $finaltable, 'test' => 1, 'ifakulta'=>0,'katedra'=>$this->katedry_zoz(), 'fakulta' =>$this->fakulty(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
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
            ->where('aktivny',1)
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kat):
                if($kat['nazov'] == $zam['nazov']) {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email,'idKatedra'=> $zam->idKatedra, 'katedra'=> $zam->nazov,
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

    public function tagy(){
        $tag =Zamestnanec_tag::select('*')
            ->join('tags','tags.id','=','tag_id')
            ->get();

        $tagy=[];

        foreach (Zamestnanec::all() as $zam): {
            foreach ($tag as $ta):{
                if($ta->zamestnanec_id == $zam->idzamestnanec){
                    $tagy[]= ['id'=>$zam->idzamestnanec, 'name'=>$ta->name];
                }
            }
            endforeach;
        }
        endforeach;

        return $tagy;
    }

    public function katedry_zoz()
    {
        $kat01 =[];

        $kat02 =Katedra::select('idKatedra' , 'nazov')
            ->groupBy('nazov','idKatedra')
            ->get();

        $kat01[0] = '...';

        foreach ( $kat02 as $katedra):
            $kat01[$katedra->idKatedra] = $katedra->nazov;
        endforeach;

        return $kat01;
    }

    public function findkatedry(Request $request)
    {
        if ($request->id != 0) {
            $data = Katedra::select('idKatedra', 'nazov')
                ->where('Fakulta_idFakulta', $request->id)
                ->groupBy('nazov', 'idKatedra')
                ->get();
        }
        else {
            $data = Katedra::select('idKatedra', 'nazov')
                ->groupBy('nazov', 'idKatedra')
                ->get();
        }
        return response()->json($data);
    }
}
