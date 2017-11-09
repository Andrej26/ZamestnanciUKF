<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RolaPouzivatela extends Model
{
    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $table = 'rolaPouzivatela';
    protected $primaryKey='idrolaPouzivatela';
    protected $fillable = ['idrolaPouzivatela', 'rola'];

    public function zamestnanci(){
        return $this->hasMany('App\Model\Zamestnanec');
    }
}
