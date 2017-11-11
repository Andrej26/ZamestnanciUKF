<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publikacia extends Model
{
    protected $table = 'Publikacia';

    protected $fillable = array('idPublikacia', 'rok', 'nazov', 'Zamestnanec_idzamestnanec', 'isbn', 'podtitulok',
    'autori', 'typ', 'vydavatel', 'kod');


}
