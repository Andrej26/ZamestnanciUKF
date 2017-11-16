<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        return view('zamestnanec');
    }

    public function adminn()
    {
        return view('admin');
    }


    public function logout()
    {
        Auth::guard('zame')->logout();
        return redirect(route('ukf'));
    }

    public function profil()
    {
        return view('Zam.profil');
    }

    public function publikacie()
    {
        return view('Zam.publikacie');
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
}
