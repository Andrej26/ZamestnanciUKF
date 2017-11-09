<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\Zamestnanec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DBZamestnanci extends Controller
{

    public function index()
    {
        $table = Zamestnanec::all();
        return view('DBtables.Zamestnanci.DBtable',['zamestnanciss' =>$table]);
    }


    public function create()
    {
        return view('DBtables.Zamestnanci.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'meno' => 'required|max:50',
            'email' => 'required|max:60',
            'heslo' => 'required|max:22',
            'profil' => 'required|max:50',
        ]);

        Zamestnanec::create([
            'meno' => $request->meno,
            'email' => $request->email,
            'heslo' => Hash::make($request->heslo),
            'profil' => $request->profil,
            'stav' => 1,
            ]);
        return redirect()->route('TabZamestnanci.index')
            ->with('success','Zamestnanec bol vytvorený.');

    }

    public function show($id)
    {
        $zam = Zamestnanec::find($id);
        return view('DBtables.Zamestnanci.show',compact('zam'));
    }


    public function edit($id)
    {
        $zam01 = Zamestnanec::find($id);
        return view('DBtables.Zamestnanci.edit',compact('zam01'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'meno' => 'required|max:50',
            'email' => 'required|max:60',
            'heslo' => 'required|max:22',
            'profil' => 'required|max:50',
        ]);
        Zamestnanec::find($id)->update([
            'meno' => $request->meno,
            'email' => $request->email,
            'heslo' => Hash::make($request->heslo),
            'profil' => $request->profil,]
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

}