<?php

namespace App\Http\Controllers;

use App\Model\Katedra;
use App\Model\Projekt;
use App\Model\Publikacia;
use App\Model\Zamestnanec;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\DB;


class ChartsC extends Controller
{


    public function index($idfakulty)
    {
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

    public function index_zam($idfakulty)
    {

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

        return view('showCharts_zam',['chart'=> $chart, 'idfakulty'=>$idfakulty]);
    }



}