<?php

namespace App\Http\Controllers\DBControllers;

use App\Model\Zamestnanec_tag;
use Illuminate\Http\Request;
use App\Model\Tag;
use App\Http\Controllers\Controller;

class DBTag extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $table = Tag::all();
        return view('Admin_DBtables.Tagy.DBtable',['tagys' =>$table]);
    }


    public function create()
    {
        return view('Admin_DBtables.Tagy.create');
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'name' => 'required|max:255',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);
        return redirect()->route('TabTag.index')
            ->with('success','Tag bol vytvorený.');

    }

    public function show($id)
    {
        $tag = Tag::find($id);
        return view('Admin_DBtables.Tagy.show',compact('tag'));
    }


    public function edit($id)
    {
        $tagy = Tag::find($id);

        return view('Admin_DBtables.Tagy.edit',compact('tagy'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => 'required|max:255',
        ]);

        Tag::find($id)->update($request->all());
        return redirect()->route('TabTag.index')
            ->with('success','Tag bol upravený.');
    }


    public function destroy($id)
    {
        foreach (Zamestnanec_tag::all() as $zam_tag):
            if ($zam_tag->tag_id == $id)
                $zam_tag->delete();
            endforeach;
        Tag::find($id)->delete();
        return redirect()->route('TabTag.index')
            ->with('success','Tag bol úspešne odstránený');
    }
}
