<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\Fakulta;
use App\Model\Katedra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBKatedra extends Controller
{
    public function index()
    {
        $table = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
                ->orderBy('idKatedra', 'asc')
                    ->paginate(15);
        return view('DBtables.Katedry.DBtable',['katedres' =>$table]);
    }


    public function create()
    {
        return view('DBtables.Katedry.create',['fakulta' =>$this->fakulty()]);
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'nazov' => 'required|max:60',
            'skratkaKatedry' => 'required|max:15',
        ]);

        Katedra::create([
            'nazov' => $request->nazov,
            'skratkaKatedry' => $request->skratkaKatedry,
            'Fakulta_idFakulta' => $request->fakulta,
        ]);
        return redirect()->route('TabKatedra.index')
            ->with('success','Nová katedra bola vytvorená.');

    }

    public function show($id)
    {
        $kat = Katedra::select('katedra.*', 'Fakulta.nazov as nazov01')
            ->join('Fakulta', 'idFakulta', '=', 'Fakulta_idFakulta')
            ->where('idKatedra', $id)
            ->first();
        return view('DBtables.Katedry.show',compact('kat'));
    }


    public function edit($id)
    {
        $kat01 = Katedra::find($id);

        return view('DBtables.Katedry.edit',['kat01' =>$kat01, 'kat02' => $this->fakulty()]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nazov' => 'required|max:60',
            'skratkaKatedry' => 'required|max:15',
        ]);

        Katedra::find($id)->update([
            'nazov' => $request->nazov,
            'skratkaKatedry' => $request->skratkaKatedry,
            'Fakulta_idFakulta' => $request->fakulta,
            ]);

        return redirect()->route('TabKatedra.index')
            ->with('success','Katedra bola upravená');
    }


    public function destroy($id)
    {
        Katedra::find($id)->delete();
        return redirect()->route('TabKatedra.index')
            ->with('success','Katedra bola úspešne odstránená');
    }

    public function fakulty()
    {
        $fak01 =[];

        $fak02 =Fakulta::select('idFakulta' , 'nazov')
            ->groupBy('nazov','idFakulta')
            ->get();

        foreach ( $fak02 as $fakulta):
            $fak01[$fakulta->idFakulta] = $fakulta->nazov;
        endforeach;

        return $fak01;
    }
}