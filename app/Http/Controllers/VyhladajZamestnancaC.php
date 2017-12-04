<?php

namespace App\Http\Controllers;

use App\Model\Fakulta;
use App\Model\Katedra;
use App\Model\Tag;
use App\Model\Zamestnanec_tag;
use Illuminate\Http\Request;
use App\Model\Zamestnanec;

class VyhladajZamestnancaC extends Controller
{
    public function zobraz(Request $request)
    {

        $term = $request->get('fulltext_input');
       // $users = Zamestnanec::where('meno','LIKE', '%'.$term.'%')->get();
      //  $users = Zamestnanec::select('meno, idzamestnanec as id, ')

        $users = $this->spojenie2tabuliek($term);


        $tag02=Tag::all();
        $tag=[];
        foreach ($tag02 as $t) {
            $tag[$t->id]= $t->name;
        }

        return view('UKF.ZProfilov',['zamestnanec' => $users, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
    }


    public function zobrazAkoZamestnanec(Request $request)
    {

        $term = $request->get('fulltext_input_emp');
        $users = $this->spojenie2tabuliek($term);
       // $users = Zamestnanec::where('meno','LIKE', '%'.$term.'%')->get();


        $tag02=Tag::all();
        $tag=[];
        foreach ($tag02 as $t) {
            $tag[$t->id]= $t->name;
        }

        return view('Zam.ZProfilov',['zamestnanec' => $users, 'test' => 1, 'ifakulta'=>0, 'fakulta' =>$this->fakulty(), 'tags'=> $tag, 'tagy'=>$this->tagy()]);
    }

    public function fulltext(Request $request)
    {
        $search = $request->get('search');
        $users = Zamestnanec::where('meno','LIKE', '%'.$search.'%')->get();

        $data = [];

        foreach ($users as $key => $value)
        {
            $data [] = ['label' =>  $value->meno, 'value' => $value->meno, 'id' => $value->idzamestnanec];
        }



        return response()->json(
            $data
        );
    }



    public function spojenie2tabuliek($term)
    {
       $pom=[];

        $kat01 = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->orderBy('idKatedra', 'asc')
            ->get();

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->where('meno','LIKE', '%'.$term.'%')
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
}