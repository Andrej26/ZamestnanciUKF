<?php
/**
 * Created by PhpStorm.
 * User: Andre
 * Date: 16.10.2017
 * Time: 23:04
 */

namespace App\Http\Controllers;
use App\Model\Fakulta;
use App\Model\Katedra;
use App\Model\Projekt;
use App\Model\Publikacia;
use App\Model\RolaPouzivatela;
use App\Model\Zamestnanci;
use App\Model\Zamestnanec;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use DB;



class DbConnectTest extends Controller
{
    /**
     *
     */
    public function CopyData()
    {
        // nastavenie maximalneho limitu na vykonanie tohto phpcka
        set_time_limit(600);


        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://ukfprofil.teacher.sk',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);

        // vlozenie zakladnych 3 roli do databazy
        $this->VlozenieZakladnychRoli();

        // vytvorenie requestu na adrese https://ukfprofil.teacher.sk/get-teachers a ulozenie vysledku do premennej $response
        $response = $client->request('GET', 'get-teachers');

        // dekodovanie jsona ziskaneho z requestu getBody() je telo requestu a getHeader() je hlavicka requestu a getStatusCode() je stav 200 means OK
        $decoded = json_decode($response->getBody());
        //echo $response->getStatusCode();
        //echo $response->getBody();

        // cyklus ktory prejde premennou decoded, v ktorej su ulozene rozparsovane udaje z jsonu a kazdym prechodom je
        // dany zaznam ulozeny v premennej $r
        foreach ($decoded as $r)
        {
            /*
            if($r->id.'' == '2460')
            {

                //continue;
            }*/

            // zavolanie metody firstorcreate na modeli Fakulta, ak este zaznam neexistuje tak sa vytvori,
            // ak zaznam existuje tak sa vrati hodnota null
            $idFakulty = Fakulta::firstOrCreate([
                'nazov' => $r->faculty // do nazvu fakulty je vlozena hodnota z jsonu pod nazvom faculty
            ]);

            // querry na databazu z tabulky fakulta a chcem ziskat idcko z nazvu fakulty pre nasledovne vlozenie ako cudzi kluc
            $idf = DB::table('fakulta')->where('nazov', $r->faculty)->first();

            // opakovana funkcionalita ako pri predchadzajucom pripade
            $idKatedry = Katedra::firstOrCreate([
                'nazov' => $r->department,
                'skratkaKatedry' => $r->dep_acronym,
                'Fakulta_idFakulta' => $idf -> idFakulta
            ]);

            $idKat = DB::table('katedra')->where('skratkaKatedry', $r->dep_acronym)->first();

            Zamestnanec::firstOrCreate([
                'idzamestnanec' => $r->id,
                'meno' => $r->name,
                'heslo' => 'passwd',
                'profil' => $r->description,
                'rolaPouzivatela_idrolaPouzivatela' => 1,
                'Katedra_idKatedra' => $idKat -> idKatedra
            ]);

            //poslane getu na detaily zamestnanca a projekty zamestnanca do getu hlavicky samozrehme vlozime idcko a ako
            //mozeme vidiet zmenila sa aj uri apicka narozdiel od toho prveho get URI pre zamestnancov
            $response2 = $client->request('GET', 'get-teacher/'.$r->id);
            // get body ziska telo rozparsovaneho jsonu a premenna true urcuje ci sa ma prekonvertovat telo ako Array alebo ma
            //zostat ako objekt
            $decoded2 = json_decode($response2->getBody(), true);

            // prechod vsetkymi publikaciami zamestnanca
            foreach ($decoded2['publications'] as $publikacia)
            {
                Publikacia::firstOrCreate([
                    'rok' => $publikacia['year'],
                    'nazov' => $publikacia['title'],
                    'Zamestnanec_idzamestnanec' => $r->id,
                    'isbn' => $publikacia['ISBN'],
                    'podtitulok' => $publikacia['sub_title'],
                    'autori' => $publikacia['all_authors'],
                    'typ' => $publikacia['type'],
                    'vydavatel' => $publikacia['publisher'],
                    'kod' => $publikacia['code'],
                    'pocetStran' => $publikacia['pages']
                ]);
            }

            //prechod vsetkymi projektami zamestnanca
            foreach ($decoded2['projects'] as $projekt)
            {
                Projekt::firstOrCreate([
                    'nazov' => $projekt['title'],
                    'zaciatok' => $projekt['year_from'],
                    'koniec' => $projekt['year_end'],
                    'regCislo' => $projekt['reg_number'],
                    'Zamestnanec_idzamestnanec' => $r->id
                ]);
            }
            echo $r->id;
            echo "<br>";
        } // koniec tela jedneho zamestnanca ktoreho sme presli v tomto cykle a opakujem az dokym neprejdem vsetkych

    }

    // vlozenie roli pouzivatelov ktore budeme pouzivate tj admin navstevnik a zamestnanec
    public function VlozenieZakladnychRoli()
    {
        RolaPouzivatela::firstOrCreate([
            'rola' => 'zamestnanec',
        ]);
        RolaPouzivatela::firstOrCreate([
            'rola' => 'navstevnik',
        ]);
        RolaPouzivatela::firstOrCreate([
            'rola' => 'admin',
        ]);
    }
}