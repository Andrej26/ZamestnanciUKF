<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;


class UKFController extends Controller
{
    public function create()
    {
        return view('DBControl.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'meno' => 'required|max:20',
            'priezvisko' => 'required|max:20',
            'email' => 'required|max:50',
            'heslo' => 'required|max:20',
            'vek' => 'required|max:3'
        ]);

        DB::create($request->all());

        return redirect()->route('lolo.index')
            ->with('success','Emploier created successfully');

    }

    public function show($id)
    {
        $table = DB::find($id);
        return view('DBControl.show',compact('table'));
    }


    public function edit($id)
    {
        $table = DB::find($id);
        return view('DBControl.edit',compact('table'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'meno' => 'required',
            'priezvisko' => 'required',
            'email' => 'required',
            'heslo' => 'required',
            'vek' => 'required',
        ]);
        DB::find($id)->update($request->all());
        return redirect()->route('lolo.index')
            ->with('success','Emploier updated successfully');
    }

    public function destroy($id)
    {
        DB::find($id)->delete();
        return redirect()->route('lolo.index')
            ->with('success','Emploier deleted successfully');
    }

}