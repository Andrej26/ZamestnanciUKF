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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBFakulta extends Controller
{

    public function index()
    {
        $table = Fakulta::all();
        return view('Admin_DBtables.Fakulty.DBtable',['fakultes' =>$table]);
    }


    public function create()
    {
        return view('Admin_DBtables.Fakulty.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'nazov' => 'required|max:60',
        ]);

        Fakulta::create($request->all());
        return redirect()->route('TabFakulta.index')
            ->with('success','Nová fakulta bola vytvorená.');

    }

    public function show($id)
    {
        $fakulta = Fakulta::find($id);
        return view('Admin_DBtables.Fakulty.show',compact('fakulta'));
    }


    public function edit($id)
    {
        $fakulta01 = Fakulta::find($id);

        return view('Admin_DBtables.Fakulty.edit',compact('fakulta01'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nazov' => 'required|max:60',
        ]);

        Fakulta::find($id)->update($request->all());
        return redirect()->route('TabFakulta.index')
            ->with('success','Fakulta bola upravená');
    }


    public function destroy($id)
    {
        Fakulta::find($id)->delete();
        return redirect()->route('TabFakulta.index')
            ->with('success','Fakulta bola úspešne odstránená');
    }
}