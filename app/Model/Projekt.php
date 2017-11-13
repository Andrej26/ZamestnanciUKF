<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $table = 'Projekt';
    protected $primaryKey= 'idProjekt';
    protected $fillable = array('idProjekt', 'nazov', 'zaciatok', 'koniec', 'regCislo', 'Zamestnanec_idzamestnanec');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it

}
