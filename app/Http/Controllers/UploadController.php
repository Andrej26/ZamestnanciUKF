<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UploadController extends Controller
{

    public function upload($idcko)
    {

        if(Input::hasFile('file'))
        {
            $file = Input::file('file');
            $rozdelenie = explode(".", $file->getClientOriginalName());
            $pripona = end($rozdelenie);

            /*
            if($pripona != "jpg" || $pripona != "png")
            {
                echo  "zla pripona suboru !";
                return;
            }*/

            // ak existuje jpg subor s danym menom
            if (file_exists('picture/'.$idcko.".jpg"))
            {
                // vymaze staru foto a uploadne novu
                chmod('picture/'.$idcko.".jpg", 0644);
                unlink('picture/'.$idcko.".jpg");

                $file->move('picture', $idcko.".".$pripona);
            }
            else if(file_exists('picture/'.$idcko.".png"))
            {
                chmod('picture/'.$idcko.".png", 0644);
                unlink('picture/'.$idcko.".png");

                $file->move('picture', $idcko.".".$pripona);
            }
            else
            {
                $file->move('picture', $idcko.".".$pripona);
            }

            return view('Zam.mojprofil', ['profils' => $this->profily($idcko)], ['publikacia' => $this->publikacie($idcko), 'projekt' => $this->projekty($idcko),
                'komentare' =>$this->komentare($idcko), 'tagy'=>$this->tagy()])->with('success','Profilová fotografia bola úspešne zmenená.');
        }

    }

    public static function VratObrazokZamestnanca($idcko)
    {
        if (file_exists('picture/'.$idcko.".jpg"))
        {
            return "picture/".$idcko.".jpg";
        }
        else if (file_exists('picture/'.$idcko.".png"))
        {
            return "picture/".$idcko.".png";
        }
        else
        {
            return "dummy/PersonPlaceholder.png";
        }
    }


    public function tagy(){
        $tag =Zamestnanec_tag::select('*')
            ->join('tags','tags.id','=','tag_id')
            ->get();

        $tagy=[];

        foreach (Zamestnanec::all() as $zam): {
            foreach ($tag as $ta):{
                if($ta->zamestnanec_id == $zam->idzamestnanec){
                    $tagy[]= ['id'=>$zam->idzamestnanec, 'name'=>$ta->name];
                }
            }
            endforeach;
        }
        endforeach;

        return $tagy;
    }

    public function profily($id)
    {
        $pm=[];
        $profl = Zamestnanec::select('*','katedra.nazov as nazov01')
            ->join('katedra','idKatedra','=','Katedra_idKatedra')
            ->get();

        foreach ($profl as $prof):
            if ($prof['idzamestnanec'] == $id) {
                $pm[] = ['id' => $prof->idzamestnanec, 'mena' => $prof->meno, 'rola1' => $prof->profil, 'katedra1' => $prof->nazov01, 'rol'=>$prof->rolaPouzivatela_idrolaPouzivatela, 'mail'=>$prof->email];
            }
        endforeach;
        return $pm;
    }

    public function publikacie($ids)
    {
        $pm=[];
        $publ = Publikacia::select('*')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        foreach ($publ as $pub):
            if  ($pub['Zamestnanec_idzamestnanec'] == $ids) {
                $pm[] = ['nazov' => $pub->nazov, 'isbn' => $pub->isbn, 'autori' => $pub->autori, 'vydavatel' => $pub->vydavatel, 'podtitulok' => $pub->podtitulok];
            }
        endforeach;
        return $pm;
    }

    public function projekty($idss)
    {
        $pm=[];
        $publ = Projekt::select('*')
            ->join('zamestnanec','idzamestnanec','=','Zamestnanec_idzamestnanec')
            ->get();

        foreach ($publ as $pub):
            if  ($pub['Zamestnanec_idzamestnanec'] == $idss) {
                $pm[] = ['nazov' => $pub->nazov, 'zaciatok' => $pub->zaciatok, 'koniec' => $pub->koniec,'reg'=>$pub->regCislo];
            }
        endforeach;
        return $pm;
    }

    public function komentare($idprof)
    {
        $koment = Komentare::select('*')
            ->join('zamestnanec','idzamestnanec','=','autor')
            ->where([
                ['okomentovanyId', '=', $idprof],
                ['odsuhlaseny', '=', 1],
            ])
            ->orderBy('komentar.created_at','asc')
            ->paginate(3);

        return $koment;
    }
}