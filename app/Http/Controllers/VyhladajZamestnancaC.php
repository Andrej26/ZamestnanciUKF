<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Zamestnanec;

class VyhladajZamestnancaC extends Controller
{
    public function zobraz(Request $request)
    {

    }

    public function fulltext(Request $request)
    {
        $search = $request->get('search');
        $users = Zamestnanec::where('meno','LIKE', '%'.$search.'%')->get();

        $data = [];

        foreach ($users as $key => $value)
        {
            $data [] = ['label' =>  $value->meno, 'value' => $value->meno, 'id' => $value->idzamestnanec];
        }



        return response()->json(
            $data
        );
    }
}