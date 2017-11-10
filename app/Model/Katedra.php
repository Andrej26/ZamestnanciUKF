<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Katedra extends Model
{
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = array('idKatedra', 'nazov', 'skratkaKatedry', 'Fakulta_idFakulta');

    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it
    protected $primaryKey='idKatedra';
    protected $table = 'katedra';
}
