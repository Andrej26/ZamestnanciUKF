<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\RolaPouzivatela;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBRola extends Controller
{

    public function index()
    {
        $table = RolaPouzivatela::all();
        return view('Admin_DBtables.Role.DBtable',['roless' =>$table]);
    }


    public function create()
    {
        return view('Admin_DBtables.Role.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'rola' => 'required|max:25',
        ]);

        RolaPouzivatela::create($request->all());
        return redirect()->route('TabRola.index')
            ->with('success','Rola bola vytvorená.');

    }

    public function show($id)
    {
        $rola = RolaPouzivatela::find($id);
        return view('Admin_DBtables.Role.show',compact('rola'));
    }


    public function edit($id)
    {
        $rola01 = RolaPouzivatela::find($id);

        return view('Admin_DBtables.Role.edit',compact('rola01'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'rola' => 'required|max:25',
        ]);

        RolaPouzivatela::find($id)->update($request->all());
        return redirect()->route('TabRola.index')
            ->with('success','Rola bola upravená');
    }


    public function destroy($id)
    {
        RolaPouzivatela::find($id)->delete();
        return redirect()->route('TabRola.index')
            ->with('success','Rola bola úspešne odstránená');
    }
}