<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;
use App\Model\Zamestnanci;
use App\Zamestnanec;
use App\Model\Titul;
use App\Model\Rola;
use App\Model\Publikacia;
use App\Model\Projekt;
use App\Model\Pracovisko;
use App\Model\KategoriaTitulu;
use App\Model\Kancelaria;
use App\Model\ClenstvoVOrganizacii;
use App\Model\VzdelanieAPrax;
use Illuminate\Http\Request;


class UKFController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function profil()
    {
        return view('UKF.profil');
    }

    public function zprofil()
    {
        return view('UKF.ZProfilov');
    }



}