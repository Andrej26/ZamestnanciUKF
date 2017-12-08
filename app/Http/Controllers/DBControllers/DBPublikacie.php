<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers\DBControllers;

use App\Http\Controllers\Controller;
use App\Model\Publikacia;
use App\Model\Zamestnanec;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DBPublikacie extends Controller
{

    public function index()
    {
        $table = Publikacia::select('*')
        ->join('zamestnanec', 'idzamestnanec', '=', 'Zamestnanec_idzamestnanec')
                ->orderBy('idPublikacia', 'asc')
                    ->paginate(15);

        return view('Admin_DBtables.Publikacie.DBtable',['publikacis' =>$table]);
    }


    public function create()
    {
        return view('Admin_DBtables.Publikacie.create',['pub02' =>$this->zamestnanci()]);
    }

    public function store(Request $request)

    {
        $this->validate($request,[
            'nazov' => 'required|max:255',
            'isbn' => 'required|max:22',
            'podtitulok' => 'required|max:30',
            'autori' => 'required|max:255',
            'typ' => 'required|max:30',
            'vydavatel' => 'required|max:70',
            'rok' => 'required|max:4',
            'pocetStran' => 'required|max:4',
            'kod' => 'required|max:60'
        ]);

        Publikacia::create([
            'nazov' => $request->nazov,
            'isbn' => $request->isbn,
            'podtitulok' => $request->podtitulok,
            'autori' => $request->autori,
            'typ' => $request->typ,
            'vydavatel' => $request->vydavatel,
            'kod' => $request->kod,
            'rok' => $request->rok,
            'pocetStran' => $request->pocetStran,
            'Zamestnanec_idzamestnanec' => $request->meno,
            ]);
        return redirect()->route('TabPublikacia.index')
            ->with('success','Bola vytvorená nová publikácia.');

    }

    public function show($id)
    {
        $pub = Publikacia::select('*')
            ->join('zamestnanec', 'idzamestnanec', '=', 'Zamestnanec_idzamestnanec')
            ->where('idPublikacia', $id)
            ->first();

        if($pub['pocetStran']==null)
        {
            $strany='neuvedený počet strán';
        }
        else
            {
                $strany=$pub['pocetStran'];
            }

        if($pub['rok']==null)
        {
            $rok='neuvedený rok vydania';
        }
        else
        {
            $rok=$pub['rok'];
        }

        return view('Admin_DBtables.Publikacie.show',['pub' => $pub, 'strany'=>$strany, 'rok'=>$rok]);
    }


    public function edit($id)
    {
        $pub01 = Publikacia::find($id);

        return view('Admin_DBtables.Publikacie.edit',['pub01' =>$pub01, 'pub02' => $this->zamestnanci()]);
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'nazov' => 'required|max:255',
            'isbn' => 'required|max:22',
            'podtitulok' => 'required|max:30',
            'autori' => 'required|max:255',
            'typ' => 'required|max:30',
            'vydavatel' => 'required|max:70',
            'rok' => 'required|max:4',
            'pocetStran' => 'required|max:4',
            'kod' => 'required|max:60'
        ]);

        Publikacia::find($id)->update([
            'nazov' => $request->nazov,
            'isbn' => $request->isbn,
            'podtitulok' => $request->podtitulok,
            'autori' => $request->autori,
            'typ' => $request->typ,
            'vydavatel' => $request->vydavatel,
            'kod' => $request->kod,
            'rok' => $request->rok,
            'pocetStran' => $request->pocetStran,
            'Zamestnanec_idzamestnanec' => $request->meno,
            ]);
        return redirect()->route('TabPublikacia.index')
            ->with('success','Publikácia bola úspešne upravená.');
    }

    public function destroy($id)
    {
        Publikacia::find($id)->delete();
        return redirect()->route('TabPublikacia.index')
            ->with('success','Publikácia bola úspešne odstránená.');
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