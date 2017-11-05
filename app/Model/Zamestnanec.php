<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamestnanec extends Model
{
    protected $primaryKey = 'idzamestnanec'; // or null
    public $incrementing = false;

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('idzamestnanec', 'meno', 'heslo', 'profil', 'Katedra_idKatedra', 'rolaPouzivatela_idrolaPouzivatela', 'email');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it
    protected $table = 'Zamestnanec';
}
