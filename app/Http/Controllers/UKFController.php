<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;
use App\Model\Fakulta;
use App\Model\Katedra;
use App\Model\Projekt;
use App\Model\Publikacia;
use App\Model\Zamestnanec;
use App\Model\Komentare;
use App\Model\Tag;
use App\Model\Zamestnanec_tag;
use Illuminate\Http\Request;


class UKFController extends Controller
{

    public function index()
    {
        $tag02=Tag::all();
        $tag=[];
        foreach ($tag02 as $t) {
            $tag[$t->id]= $t->name;
        }

        return view('index', ['zamestnanec' => $this->spojenie2tabuliek(),'zamestnanec01' => $this->spojenie2tabuliek(), 'fakulta' =>$this->fakulty(),'tags'=> $tag, 'tagy'=>$this->tagy()]);
    }

     public function profil($idprofil)
     {
         return view('UKF.profil', ['profils' => $this->profily($idprofil)], ['publikacia' => $this->publikacie($idprofil), 'projekt' => $this->projekty($idprofil), 'komentare' =>$this->komentare($idprofil), 'tagy'=>$this->tagy()]);
     }

    public function chart()
    {
        return view('charts');
    }

    public function zprofil($idkatedra)
    {
        $tag02=Tag::all();
        $tag=[];
        foreach ($tag02 as $t) {
            $tag[$t->id]= $t->name;
        }

        switch ($idkatedra) {
            case "1":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(1),'ifakulta'=>1, 'test'=> 1, 'fakulta' =>$this->fakulty(), 'tagy'=>$this->tagy(), 'tags'=> $tag]);
                break;
            case "2":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(2)],['ifakulta'=>2, 'test'=> 1, 'fakulta' =>$this->fakulty(), 'tagy'=>$this->tagy(), 'tags'=> $tag]);
                break;
            case "3":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(3)],['ifakulta'=>3, 'test'=> 1, 'fakulta' =>$this->fakulty(), 'tagy'=>$this->tagy(), 'tags'=> $tag]);
                break;
            case "5":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(5)],['ifakulta'=>4, 'test'=> 1, 'fakulta' =>$this->fakulty(), 'tagy'=>$this->tagy(), 'tags'=> $tag]);
                break;
            case "7":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(7)],['ifakulta'=>5, 'test'=> 1, 'fakulta' =>$this->fakulty(), 'tagy'=>$this->tagy(), 'tags'=> $tag]);
                break;
            default:
        }
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

    /**
     * @param $id
     * @return array
     */
    public function katedry($id)
    {
        $kat= Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->orderBy('idKatedra', 'asc')
            ->get();
        $kat01=[];
        $pom=[];

        foreach ( $kat as $katedra):
            if($katedra['Fakulta_idFakulta'] == $id)
            {
                $kat01[] = ['katedra'=>$katedra->nazov, 'fakulta'=>$katedra->nazov01];
            }
        endforeach;

        foreach (Fakulta::all() as $fakulta):
            if($fakulta['idFakulta'] == $id)
            {
                $fak01[$fakulta->idFakulta] = $fakulta->nazov;
            }
            endforeach;

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->orderBy('idzamestnanec', 'asc')
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kats):
                if($kats['katedra'] == $zam['nazov'])
                {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov, 'rola'=> $zam->rola, 'profil'=> $zam->profil, 'fakulta'=> $kats['fakulta'] ];
                }
            endforeach;
        endforeach;

        return $pom;
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

   public function profily($id)
    {
        $pm=[];
        $profl = Zamestnanec::select('*','katedra.nazov as nazov01')
            /*->join('publikacia','publikacia.Zamestnanec_idzamestnanec','=','zamestnanec.idzamestnanec')*/
            ->join('katedra','idKatedra','=','Katedra_idKatedra')
            ->get();

        foreach ($profl as $prof):
            if ($prof['idzamestnanec'] == $id) {
                $pm[] = ['id' => $prof->idzamestnanec, 'mena' => $prof->meno, 'rola1' => $prof->profil, 'katedra1' => $prof->nazov01, 'rol'=>$prof->rolaPouzivatela_idrolaPouzivatela, 'mail'=>$prof->email];
            }
        endforeach;
        return $pm;
    }

    public function publikacie($ids)
    {
        $pm=[];
        $publ = Publikacia::select('*')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        foreach ($publ as $pub):
            if  ($pub['Zamestnanec_idzamestnanec'] == $ids) {
                $pm[] = ['nazov' => $pub->nazov, 'isbn' => $pub->isbn, 'autori' => $pub->autori, 'vydavatel' => $pub->vydavatel, 'podtitulok' => $pub->podtitulok];
            }
            endforeach;
        return $pm;
    }

    public function komentare($idprof)
    {
        $pm=[];
        $koment = Komentare::select('*')
            ->join('zamestnanec','idzamestnanec','=','autor')
            ->get();

        foreach ($koment as $kom):
            if  (($kom['okomentovanyId'] == $idprof)&&($kom['odsuhlaseny'] == 1)) {
                $pm[] = ['komentar' => $kom->komentar, 'autor' => $kom->meno];
            }
        endforeach;
        return $pm;
    }

    public function projekty($idss)
    {
        $pm=[];
        $publ = Projekt::select('*')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        foreach ($publ as $pub):
            if  ($pub['Zamestnanec_idzamestnanec'] == $idss) {
                $pm[] = ['nazov' => $pub->nazov, 'zaciatok' => $pub->zaciatok, 'koniec' => $pub->koniec,'reg'=>$pub->regCislo];
            }
        endforeach;
        return $pm;
    }

    public function spojenie2tabuliek()
    {
        $pom=[];
        $id=array_random($this->random_id());

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
                if(($kat['nazov'] == $zam['nazov']) && ($zam['idzamestnanec']== $id)) {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov,
                        'rola'=> $zam->rola, 'profil'=> $zam->profil,'idFakulta'=>$kat->Fakulta_idFakulta,'fakulta'=>$kat->nazov01];
                }
            endforeach;
        endforeach;

        return $pom;
    }

    public function random_id()
    {
        $zam_id=[];
        foreach (Zamestnanec::all() as $zam):
            $zam_id[]= $zam->idzamestnanec;
        endforeach;

        return $zam_id;
    }

}