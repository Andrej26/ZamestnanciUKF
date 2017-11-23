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

    public function zprofil($idkatedra)
    {
        switch ($idkatedra) {
            case "1":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(1), 'fakulta'=>1]);
                break;
            case "2":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(2)]);
                break;
            case "3":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(3)]);
                break;
            case "4":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(4)]);
                break;
            case "5":
                return view('UKF.ZProfilov',['zamestnanec' =>$this->katedry(5)]);
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
        $fak01[6] = 'Ostatné pozície na ukf';

        return $fak01;
    }

    public function katedry($id)
    {
        $kat02 = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->orderBy('idKatedra', 'asc')
            ->get();
        $kat01=[];
        $pom=[];
        $fakulta='';


        foreach ( $kat02 as $katedra):
            if($katedra['Fakulta_idFakulta'] == $id) {
                $kat01[$katedra->idKatedra] = $katedra->nazov;
                $fakulta=$katedra->nazov01;
            }
        endforeach;

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->orderBy('idzamestnanec', 'asc')
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kats):
                if($kats == $zam['nazov']) {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov, 'rola'=> $zam->rola, 'profil'=> $zam->profil, 'fakulta' =>$fakulta];
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