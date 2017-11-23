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
                ->orderBy('idzamestnanec', 'asc')
                    ->paginate(15);
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
            'password' => 'required|max:22',
            'profil' => 'required|max:50',
            //'katedra' => 'required|max:100',
           // 'rola' => 'required|max:30',
        ]);

        Zamestnanec::create([
            'idzamestnanec' => $this->idgenerator(),
            'meno' => $request->meno,
            'email' => $request->email,
            'password' => Hash::make($request->heslo),
            'profil' => $request->profil,
            'aktivny' => '1',
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


    public function edit($id)
    {
        $zam01 = Zamestnanec::find($id);

        return view('DBtables.Zamestnanci.edit',['zam01' =>$zam01, 'zam02' => $this->katedry(), 'zam03' => $this->roly()]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'meno' => 'required|max:50',
            'email' => 'required|max:60',
            'password' => 'required|max:22',
            'profil' => 'required|max:50',
            'nazov' => 'required|max:100',
        ]);

        Zamestnanec::find($id)->update([
            'meno' => $request->meno,
            'email' => $request->email,
            'password' => Hash::make($request->heslo),
            'profil' => $request->profil,
            'Katedra_idKatedra' => $request->nazov,
            'rolaPouzivatela_idrolaPouzivatela' => $request->rola,]
        );
        return redirect()->route('TabZamestnanci.index')
            ->with('success','Zamestnanec bol úspešne upravený');
    }

    public function hide($id)
    {
        $pom=Zamestnanec::find($id,['aktivny']);

        if ($pom['aktivny'] == '0'){
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Daný zamestnanec už nemá možnosť prihlásiť sa do systému.');
        }
        else {
            Zamestnanec::find($id)->update(['aktivny'=>'0']);
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Zamestnanec sa už nemôže prihlásiť do systému.');
        }
    }

    public function unhide($id)
    {
        $pom=Zamestnanec::find($id,['aktivny']);

        if ($pom['aktivny'] == '1'){
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Daný zamestnanec už má možnosť prihlásiť sa do systému.');
        }
        else {
            Zamestnanec::find($id)->update(['aktivny'=>'1']);
            return redirect()->route('TabZamestnanci.index')
                ->with('success','Zamestnanec sa už môže prihlásiť do systému.');
        }
    }


    public function katedry()
    {
        $zam01 =[];

        $zam02 =Katedra::select('idKatedra' , 'nazov')
            ->groupBy('nazov','idKatedra')
            // ->orderBy('nazov', 'asc')
            ->get();

        foreach ( $zam02 as $katedra):
            $zam01[$katedra->idKatedra] = $katedra->nazov;
        endforeach;

        return $zam01;
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

    public function idgenerator()
    {
        $idgen01=Zamestnanec::max('idzamestnanec');
        $idgen02=$idgen01+1;
        return $idgen02;
    }
}