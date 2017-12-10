<?php

namespace App\Http\Controllers;

use App\Model\Katedra;
use App\Model\Zamestnanec;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;


class ChartsC extends Controller
{


    public function index($idfakulty)
    {

        // $tmp = $this->spojenie2tabuliek();

        /* $users = Zamestnanec::where(DB::raw("(DATE_FORMAT(created_at,'%Y'))"),date('Y'))

             ->get();*/

        /*$users = Zamestnanec::where(DB::raw("katedra_idkatedra"),date('Y'))

            ->get();*/

        /*$users = $this->spojenie2tabuliek();*/

        $zames = Zamestnanec::select('Zamestnanec.*','Katedra.nazov as katedra')
            ->join('Katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->where('katedra.Fakulta_idFakulta',$idfakulty)
            ->get();

        $chart = Charts::database($zames, 'pie', 'highcharts')

            ->title("Rozdelenie podľa katedier")

            ->elementLabel("Total Users")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('katedra');

        return view('showCharts',['chart'=> $chart, 'idfakulty'=>$idfakulty]);

    }

    public function showAll()
    {

    }

    public function spojenie2tabuliek()
    {
        $pom=[];

        $kat01 = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->get();

        $zames = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->get();

        foreach ($zames as $zam):
            foreach ($kat01 as $kat):
                if($kat['nazov'] == $zam['nazov']) {
                    $pom[] = ['id' => $zam->idzamestnanec, 'meno'=> $zam->meno, 'email'=> $zam->email, 'katedra'=> $zam->nazov,
                        'rola'=> $zam->rola, 'profil'=> $zam->profil,'idFakulta'=>$kat->Fakulta_idFakulta,'fakulta'=>$kat->nazov01];
                }
            endforeach;
        endforeach;

        return (object) $pom;
    }
}