<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publikacia extends Model
{
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('idPublikacia', 'rok', 'nazov', 'Zamestnanec_idzamestnanec', 'isbn', 'podtitulok',
    'autori', 'typ', 'vydavatel', 'kod');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it
    protected $table = 'Publikacia';
}
