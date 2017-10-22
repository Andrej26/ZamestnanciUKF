<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamestnanci extends Model
{
    protected $table01='clenstvoVOrganizacii';
    protected  $fillable01 = ['trvanie', 'popis'];

    protected $table02='Kancelaria';
    protected  $fillable02 = ['oznacenie'];

    protected $table03='kategoriaTitulu';
    protected  $fillable03 = ['nazovKategorie'];

    protected $table04='Pracovisko';
    protected  $fillable04 = ['nazov'];

    protected $table05='Projekt';
    protected  $fillable05 = ['trvanie', 'popis'];

    protected $table06='Publikacia';
    protected  $fillable06 = ['rok','nazov'];

    protected $table07='rolaPouzivatela';
    protected  $fillable07 = ['rola'];

    protected $table08='titul';
    protected  $fillable08 = ['nazov'];

    protected $table09='vzdelanieAPrax';
    protected  $fillable09 = ['rok','popis','vzdelanie'];

    protected $table10='Zamestnanec';
    protected  $fillable10 = ['meno','priezvisko','telZamestnanie','telMobilny','email','heslo','konzultacneHodiny','profil'];
    /*sem sa potom zadajú stlpce databazy*/
}
