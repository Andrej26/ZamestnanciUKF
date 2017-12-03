<?php

namespace App\Http\Controllers;

use App\Model\Fakulta;
use App\Model\Tag;
use App\Model\Zamestnanec_tag;
use Illuminate\Http\Request;
use App\Model\Zamestnanec;

class VyhladajZamestnancaC extends Controller
{
    public function zobraz(Request $request)
    {

        $term = $request->get('fulltext_input');
        $users = Zamestnanec::where('meno','LIKE', '%'.$term.'%')->get();


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
        $users = Zamestnanec::where('meno','LIKE', '%'.$term.'%')->get();


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