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
use Illuminate\Http\Request;


class UKFController extends Controller
{

    public function index()
    {
        return view('index', ['fakulta' =>$this->fakulty()]);
    }

    public function profil($idprofil)
    {
        return view('UKF.Profil',['profils' =>$this->profily($idprofil)],['publikacia'=>$this->publikacie($idprofil),'projekt'=>$this->projekty($idprofil)]);

    }

    public function chart()
    {
        return view('charts');
    }

    public function zprofil($idkatedra)
    {

        switch ($idkatedra) {
            case "1":
                $fakulta = Fakulta::where('idFakulta','=',$idkatedra);
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(1)],['ifakulta'=>1]);
                break;
            case "2":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(2)],['ifakulta'=>2]);
                break;
            case "3":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(3)],['ifakulta'=>3]);
                break;
            case "5":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(5)],['ifakulta'=>4]);
                break;
            case "7":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(7)],['ifakulta'=>5]);
                break;
            default:
              //  echo "Your favorite color is neither red, blue, nor green!";
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
        $kat02 =Katedra::all();
        $kat01=[];
        $pom=[];

        foreach ( $kat02 as $katedra):
            if($katedra['Fakulta_idFakulta'] == $id)
            {
                $kat01[$katedra->idKatedra] = $katedra->nazov;
            }
        endforeach;

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->orderBy('idzamestnanec', 'asc')
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kats):
                if($kats == $zam['nazov'])
                {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov, 'rola'=> $zam->rola, 'profil'=> $zam->profil];
                }
            endforeach;
        endforeach;

        return $pom;
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
                $pm[] = ['id' => $prof->idzamestnanec, 'mena' => $prof->meno, 'rola1' => $prof->profil, 'katedra1' => $prof->nazov01, 'rol'=>$prof->rolaPouzivatela_idrolaPouzivatela];
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
    public function formpasw()
    {
        return view('Layouts.forgotpassword');
    }

}