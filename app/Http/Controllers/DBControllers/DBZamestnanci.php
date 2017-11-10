<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\Katedra;
use App\Model\Zamestnanec;
use App\Model\RolaPouzivatela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBZamestnanci extends Controller
{

    public function index()
    {
        $table = Zamestnanec::select('*')
        ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
                ->get();
        return view('DBtables.Zamestnanci.DBtable',['zamestnanciss' =>$table]);
    }


    public function create()
    {
        return view('DBtables.Zamestnanci.create',['katedra' =>$this->katedry(), 'rola' => $this->roly()]);
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'meno' => 'required|max:50',
            'email' => 'required|max:60',
            'heslo' => 'required|max:22',
            'profil' => 'required|max:50',
            //'katedra' => 'required|max:100',
           // 'rola' => 'required|max:30',
        ]);

        Zamestnanec::create([
            'meno' => $request->meno,
            'email' => $request->email,
            'heslo' => Hash::make($request->heslo),
            'profil' => $request->profil,
            'stav' => 1,
            'Katedra_idKatedra' => $request->katedra,
            'rolaPouzivatela_idrolaPouzivatela' => $request->rola,
            ]);
        return redirect()->route('TabZamestnanci.index')
            ->with('success','Zamestnanec bol vytvorený.');

    }

    public function show($id)
    {
        $zam = Zamestnanec::select('*')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->join('katedra', 'idKatedra', '=', 'Katedra_idKatedra')
            ->where('idzamestnanec', $id)
            ->first();
        return view('DBtables.Zamestnanci.show',compact('zam'));
    }

    public function katedry()
    {
        $zam02 =[];

        $zam03 =Katedra::select('idKatedra' , 'nazov')
            ->groupBy('nazov','idKatedra')
            // ->orderBy('nazov', 'asc')
            ->get();

        foreach ( $zam03 as $katedra):
            $zam02[$katedra->idKatedra] = $katedra->nazov;
        endforeach;

        return $zam02;
    }

    public function roly()
    {
        $rola01 =[];

        $rola02 =RolaPouzivatela::select('idrolaPouzivatela' , 'rola')
            ->get();

        foreach ( $rola02 as $rola):
            $rola01[$rola->idrolaPouzivatela] = $rola->rola;
        endforeach;

        return $rola01;
    }


    public function edit($id)
    {
        $zam01 = Zamestnanec::find($id);

        return view('DBtables.Zamestnanci.edit',['zam01' =>$zam01, 'zam02' => $this->katedry()]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'meno' => 'required|max:50',
            'email' => 'required|max:60',
            'heslo' => 'required|max:22',
            'profil' => 'required|max:50',
            'nazov' => 'required|max:100',
        ]);
        Zamestnanec::find($id)->update([
            'meno' => $request->meno,
            'email' => $request->email,
            'heslo' => Hash::make($request->heslo),
            'profil' => $request->profil,
            'Katedra_idKatedra' => $request->nazov,]
        );
        return redirect()->route('TabZamestnanci.index')
            ->with('success','Upraveny zamestnanec');
    }

    public function hide($id)
    {
        $pom=Zamestnanec::find($id,['stav']);

        if ($pom['stav'] == '0'){
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Daný zamestnanec už nemá možnosť prihlásiť sa do systému.');
        }
        else {
            Zamestnanec::find($id)->update(['stav'=>'0']);
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Zamestnanec sa už nemôže prihlásiť do systému.');
        }
    }

    public function unhide($id)
    {
        $pom=Zamestnanec::find($id,['stav']);

        if ($pom['stav'] == '1'){
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Daný zamestnanec už má možnosť prihlásiť sa do systému.');
        }
        else {
            Zamestnanec::find($id)->update(['stav'=>'1']);
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Zamestnanec sa už môže prihlásiť do systému.');
        }
    }


    public function RolaJoin($id)
    {
       return Zamestnanec::select('rola')
            ->join('rolaPouzivatela', 'idrolaPouzivatela', '=', 'rolaPouzivatela_idrolaPouzivatela')
            ->where('idzamestnanec', $id->idzamestnanec)->first();
    }

}