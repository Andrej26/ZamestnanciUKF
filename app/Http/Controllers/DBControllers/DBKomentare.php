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
use App\Model\Komentare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBKomentare extends Controller
{

    public function index()
    {
        $table = Komentare::select('komentar.*','a.meno','b.meno as meno01')
            ->join('zamestnanec as a', 'a.idzamestnanec', '=', 'autor')
            ->join('zamestnanec as b' , 'b.idzamestnanec', '=', 'okomentovanyId')
            ->paginate(20);
        return view('Admin_DBtables.Komentare.DBtable',['komentares' =>$table]);
    }

    public function schvalenie($id)
    {
        $pom=Komentare::find($id,['odsuhlaseny']);

        if ($pom['odsuhlaseny'] == '1'){
            Komentare::find($id)->update(['odsuhlaseny'=>'-1']);
            return redirect()->route('TabKomentar.index')
                ->with('success','Komentár je neschválený. Na stránke sa nezobrazí.');
        }
        else {
            Komentare::find($id)->update(['odsuhlaseny'=>'1']);
            return redirect()->route('TabKomentar.index')
                ->with('success','Komentár bol úspešne schválený.');
        }
    }

    public function destroy($id)
    {
        Komentare::find($id)->delete();
        return redirect()->route('TabKomentar.index')
            ->with('success','Komentár bol úspešne odstránený');
    }


    public function edit($id)
    {
        $koment = Komentare::find($id);

        return view('Admin_DBtables.Komentare.edit',compact('koment'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'komentar' => 'required|max:60',
        ]);

        Komentare::find($id)->update($request->all());
        return redirect()->route('TabKomentar.index')
            ->with('success','Komentár bol upravený');
    }
}