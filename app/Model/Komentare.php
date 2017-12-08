<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Komentare extends Model
{
    protected $table = 'komentar';
    protected $primaryKey = 'idKomentar';
    protected $fillable = array('idKomentar', 'komentar', 'autor', 'okomentovanyId', 'odsuhlaseny');

}
