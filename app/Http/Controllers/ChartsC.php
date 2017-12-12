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

        $publikacie = Publikacia::select('publikacia.*','zamestnanec.Katedra_idKatedra as katedra')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        $projekty = Projekt::select('projekt.*', 'zamestnanec.Katedra_idkatedra as katedra')
            ->join('zamestnanec', 'Zamestnanec_idzamestnanec', '=', 'idzamestnanec')
            ->orderBy('zaciatok')
            ->get();

        $chartZamKat = Charts::database($zames, 'pie', 'highcharts')

            ->title("Rozdelenie zamestnancov podľa katedier")

            ->elementLabel("Počet zamestnancov podľa katedry")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('katedra');


        $chartProjectsCount = Charts::database($projekty, 'bar', 'highcharts')

            ->title("Počet uskutočnených projektov")

            ->elementLabel("Počet projektov")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('zaciatok');


        $chartPubCount = Charts::database($publikacie, 'pie', 'highcharts')

            ->title("Rozdelenie publikácií podľa typu väzby")

            ->elementLabel("Počet publikácií")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('typ');




        return view('showCharts',['chartZamKat'=> $chartZamKat, 'chartProjectsCount' => $chartProjectsCount, 'chartPubCount' => $chartPubCount,'idfakulty'=>$idfakulty]);

    }

    public function index_zam($idfakulty)
    {

        $zames = Zamestnanec::select('Zamestnanec.*','Katedra.nazov as katedra')
            ->join('Katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->where('katedra.Fakulta_idFakulta',$idfakulty)
            ->get();

        $publikacie = Publikacia::select('publikacia.*','zamestnanec.Katedra_idKatedra as katedra')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        $projekty = Projekt::select('projekt.*', 'zamestnanec.Katedra_idkatedra as katedra')
            ->join('zamestnanec', 'Zamestnanec_idzamestnanec', '=', 'idzamestnanec')
            ->orderBy('zaciatok')
            ->get();

        $chartZamKat = Charts::database($zames, 'pie', 'highcharts')

            ->title("Rozdelenie zamestnancov podľa katedier")

            ->elementLabel("Počet zamestnancov podľa katedry")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('katedra');


        $chartProjectsCount = Charts::database($projekty, 'bar', 'highcharts')

            ->title("Počet uskutočnených projektov")

            ->elementLabel("Počet projektov")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('zaciatok');


        $chartPubCount = Charts::database($publikacie, 'pie', 'highcharts')

            ->title("Rozdelenie publikácií podľa typu väzby")

            ->elementLabel("Počet publikácií")

            ->dimensions(1000, 500)

            ->responsive(false)

            ->groupBy('typ');




        return view('showCharts_zam',['chartZamKat'=> $chartZamKat, 'chartProjectsCount' => $chartProjectsCount, 'chartPubCount' => $chartPubCount,'idfakulty'=>$idfakulty]);

    }


}