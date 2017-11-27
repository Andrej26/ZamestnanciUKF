<?php

namespace App\Http\Controllers;

use App\Model\Publikacia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Fakulta;
use App\Model\Zamestnanec;
use App\Model\Projekt;
use App\Model\Komentare;
use App\Http\Controllers\Controller;

class ZamestnanecController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:zame');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('zamestnanec', ['fakulta' =>$this->fakulty()]);
    }

    public function adminn()
    {
        return view('admin');
    }


    public function logout()
    {
        Auth::guard('zame')->logout();
        return redirect(route('ukf'))
            ->with('success','Boli ste úspešne odhlásený.');
    }

    public function mojprofil()
    {
        return view('Zam.profil');
    }

    public function profil($idprofil)
    {
        return view('UKF.profil', ['profils' => $this->profily($idprofil)], ['publikacia' => $this->publikacie($idprofil), 'projekt' => $this->projekty($idprofil)]);
    }


    public function pridaniekomentaru(Request $request)
    {
        //$this->validate($request,[
         //   'komentar' => required,
      //  ]);

        echo $request->route('id');
       // return Auth::id();

        //Komentare::create($request->all());
      //  return redirect()->route('TabFakulta.index')
          //  ->with('success','Nový komentár bol vytvorený.');
    }

    public function chart()
    {
        return view('charts');
    }


    public function profily($id)
    {
        $pm=[];
        $profl = Zamestnanec::select('*','katedra.nazov as nazov01')
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





    public function fpv()
    {
        return view('Katedry.FPV');
    }

    public function ff()
    {
        return view('Katedry.FF');
    }

    public function fsvaz()
    {
        return view('Katedry.FSVaZ');
    }

    public function fsš()
    {
        return view('Katedry.FSŠ');
    }

    public function pf()
    {
        return view('Katedry.PF');
    }

    public function ostatne()
    {
        return view('Katedry.Ostatne');
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
