<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    protected $table = 'Projekt';
    protected $primaryKey= 'idProjekt';
    protected $fillable = array('idProjekt', 'nazov', 'zaciatok', 'koniec', 'regCislo', 'Zamestnanec_idzamestnanec');

}
