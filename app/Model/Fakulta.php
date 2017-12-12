<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Fakulta extends Model
{
    protected $table = 'Fakulta';
    protected $primaryKey = 'idFakulta';
    protected $fillable = array('idFakulta', 'nazov');

}
