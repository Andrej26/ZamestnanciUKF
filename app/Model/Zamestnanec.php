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

    // MASS ASSIGNMENT -------------------------------------------------------
    // define which attributes are mass assignable (for security)
    // we only want these 3 attributes able to be filled
    protected $fillable = ['idzamestnanec', 'meno', 'heslo', 'profil',
        'Katedra_idKatedra', 'rolaPouzivatela_idrolaPouzivatela', 'email','stav'];

    protected $hidden = [
        'heslo', 'remember_token',
    ];

    public function rolaPouzivatela(){
        return $this->belongsTo('App\Model\RolaPouzivatela');
    }


    // LINK THIS MODEL TO OUR DATABASE TABLE ---------------------------------
    // since the plural of fish isnt what we named our database table we have to define it

}
