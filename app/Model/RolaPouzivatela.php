<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RolaPouzivatela extends Model
{

    protected $table = 'rolaPouzivatela';
    protected $primaryKey='idrolaPouzivatela';
    protected $fillable = ['idrolaPouzivatela', 'rola'];

    public function zamestnanci(){
        return $this->hasMany('App\Model\Zamestnanec');
    }
}
