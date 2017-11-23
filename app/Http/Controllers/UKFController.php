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
use App\Model\Zamestnanec;
use Illuminate\Http\Request;


class UKFController extends Controller
{

    public function index()
    {
        return view('index', ['fakulta' =>$this->fakulty()]);
    }

    public function profil()
    {
        return view('UKF.profil');
    }

    public function chart()
    {
        return view('charts');
    }

    public function zprofil($idkatedra)
    {

        switch ($idkatedra) {
            case "1":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(1),'ifakulta'=>1, 'test'=> 1]);
                break;
            case "2":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(2)],['ifakulta'=>2, 'test'=> 1]);
                break;
            case "3":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(3)],['ifakulta'=>3, 'test'=> 1]);
                break;
            case "5":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(5)],['ifakulta'=>4, 'test'=> 1]);
                break;
            case "7":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(7)],['ifakulta'=>5, 'test'=> 1]);
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


    public function formpasw()
    {
        return view('Layouts.forgotpassword');
    }

}