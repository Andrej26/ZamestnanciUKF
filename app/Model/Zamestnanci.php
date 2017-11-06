<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamestnanci extends Model
{
    protected $table ='zamestnanec';
    protected $primaryKey='idzamestnanec';
    protected  $fillable = ['meno','priezvisko','telZamestnanie','telMobilny','email','heslo','konzultacneHodiny','profil','stav'];
    /*sem sa potom zadajú stlpce databazy*/
}
