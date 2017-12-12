<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Katedra extends Model
{
    protected $table = 'katedra';
    protected $primaryKey='idKatedra';
    protected $fillable = array('idKatedra', 'nazov', 'skratkaKatedry', 'Fakulta_idFakulta');

}
