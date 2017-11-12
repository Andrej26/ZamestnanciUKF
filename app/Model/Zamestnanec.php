<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Zamestnanec extends Authenticatable
{

    use Notifiable;

    protected $guard = 'zame';

    protected $table = 'zamestnanec';
    protected $primaryKey = 'idzamestnanec'; // or null
    public $incrementing = false;


    protected $fillable = ['idzamestnanec', 'meno', 'heslo', 'profil',
        'Katedra_idKatedra', 'rolaPouzivatela_idrolaPouzivatela', 'email','aktivny'];

    protected $hidden = [
        'heslo', 'remember_token',
    ];


    public function rolaPouzivatela(){
        return $this->belongsTo('App\Model\RolaPouzivatela');
    }


}
