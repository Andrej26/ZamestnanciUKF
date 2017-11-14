<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\Projekt;
use App\Model\Zamestnanec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBProjekty extends Controller
{

    public function index()
    {
        $table = Projekt::select('*')
        ->join('zamestnanec', 'idzamestnanec', '=', 'Zamestnanec_idzamestnanec')
                ->orderBy('idProjekt', 'asc')
                    ->get();
        return view('DBtables.Projekty.DBtable',['projektis' =>$table]);
    }


    public function create()
    {
        return view('DBtables.Projekty.create',['pro02' =>$this->zamestnanci()]);
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'nazov' => 'required|max:250',
            'zaciatok' => 'required|max:4',
            'koniec' => 'required|max:4',
            'regCislo' => 'required|max:30',
        ]);

        Projekt::create([
            'nazov' => $request->nazov,
            'zaciatok' => $request->zaciatok,
            'koniec' => $request->koniec,
            'regCislo' => $request->regCislo,
            'Zamestnanec_idzamestnanec' => $request->meno,
            ]);
        return redirect()->route('TabProjekt.index')
            ->with('success','Bol vytvorený nový projekt.');

    }

    public function show($id)
    {
        $pro = Projekt::select('*')
            ->join('zamestnanec', 'idzamestnanec', '=', 'Zamestnanec_idzamestnanec')
            ->where('idProjekt', $id)
            ->first();
        return view('DBtables.Projekty.show',compact('pro'));
    }


    public function edit($id)
    {
        $pro01 = Projekt::find($id);

        return view('DBtables.Projekty.edit',['pro01' =>$pro01, 'pro02' => $this->zamestnanci()]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nazov' => 'required|max:250',
            'zaciatok' => 'required|max:4',
            'koniec' => 'required|max:4',
            'regCislo' => 'required|max:30',
        ]);

        Projekt::find($id)->update([
            'nazov' => $request->nazov,
            'zaciatok' => $request->zaciatok,
            'koniec' => $request->koniec,
            'regCislo' => $request->regCislo,
            'Zamestnanec_idzamestnanec' => $request->meno,
            ]);
        return redirect()->route('TabProjekt.index')
            ->with('success','Projekt bol úspešne upravený');
    }

    public function destroy($id)
    {
        Projekt::find($id)->delete();
        return redirect()->route('TabProjekt.index')
            ->with('success','Projekt bol úspešne odstránený.');
    }


    public function zamestnanci()
    {
        $zam01 =[];

        $zam02 =Zamestnanec::select('idzamestnanec' , 'meno')
            ->get();

        foreach ( $zam02 as $zames):
            $zam01[$zames->idzamestnanec] = $zames->meno;
        endforeach;

        return $zam01;
    }

}