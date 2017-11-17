<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;
use App\Model\Fakulta;
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

    public function zprofil()
    {
        return view('UKF.ZProfilov');
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

}