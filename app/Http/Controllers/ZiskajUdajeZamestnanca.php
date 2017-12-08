<?php

namespace App\Http\Controllers;

use App\Model\Publikacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Fakulta;
use App\Model\Zamestnanec;
use App\Model\Projekt;
use App\Model\Katedra;
use App\Model\Komentare;
use App\Model\Tag;
use App\Model\Zamestnanec_tag;
use App\Http\Controllers\Controller;

class ZiskajUdajeZamestnanca extends Controller
{
    public static function ZiskajZamestnanca($idcko)
    {
        $zamestnanec = Zamestnanec::select('*')
            ->join('katedra as ktdr', 'idKatedra', '=', 'Katedra_idKatedra')
            ->join('fakulta as fklt', 'idFakulta', '=', 'ktdr.Fakulta_idFakulta')
            ->where('idzamestnanec', $idcko)
            ->get();

        return $zamestnanec;
    }
}