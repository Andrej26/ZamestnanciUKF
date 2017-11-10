<?php

namespace App\Http\Controllers\Auth;

use App\Model\Zamestnanec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class ZamestnanecLoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:zame')->except('logout');;
    }

    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'heslo' => 'required|min:6'
        ]);

        $zames_stav = Zamestnanec::select('stav')->where('email', $request->email)->first();
        $rola = Zamestnanec::select('rola')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->where('email', $request->email)->first();
        $admin = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->where('rolaPouzivatela_idrolaPouzivatela', '3')->get();



      //  if($rola['rola'] == 'admin')
           // {
         //   return redirect()->intended(route('admin.dashboard'));
          // }
       // else
          //  {
                if($zames_stav['stav'] == 1){
                    if(Auth::guard('zame')->attempt(['email' => $request->email, 'password' => $request->heslo], $request->remember))
                    {
                       // return redirect()->intended(route('zames.dashboard'));
                    }

                    return $admin; // return redirect()->back()->withImput($request->only('email','remember'))->with('danger','Zle ste zadali email alebo heslo.');
                }
                else
                {
                        return redirect()->route('ukf')->with('danger','Dobrý deň. Vaše konto bolo zablokované. Pre odblokovanie kontaktujte administrátora.');
                }
        //    }

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
