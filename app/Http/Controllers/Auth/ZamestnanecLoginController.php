<?php

namespace App\Http\Controllers\Auth;

use App\Zamestnanec;
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
            'password' => 'required|min:6'
        ]);

        $zames_stav = Zamestnanec::select('stav')->where('email', $request->email)->first();

        if($zames_stav['stav'] == 1){
           if(Auth::guard('zame')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
           {
               return redirect()->intended(route('zames.dashboard'));
            }

            return redirect()->back()->withImput($request->only('email','remember'))->with('danger','Zle ste zadali email alebo heslo.');
        }
        else
            {
                return redirect()->route('ukf')->with('danger','Dobrý deň. Vaše konto bolo zablokované. Pre odblokovanie kontaktujte administrátora.');
            }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
}
