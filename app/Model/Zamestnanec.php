<?php

namespace App\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Notifications\ZamesResetPasswordNotification;

class Zamestnanec extends Authenticatable
{

    use Notifiable;

    protected $guard = 'zame';

    protected $table = 'zamestnanec';
    protected $primaryKey = 'idzamestnanec';
    public $incrementing = false;


    protected $fillable = ['idzamestnanec', 'meno', 'password', 'profil',
        'Katedra_idKatedra', 'rolaPouzivatela_idrolaPouzivatela', 'email','aktivny'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rolaPouzivatela(){
        return $this->belongsTo('App\Model\RolaPouzivatela','rolaPouzivatela_idrolaPouzivatela');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Model\Tag', 'zamestnanec_tag', 'zamestnanec_id', 'tag_id');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ZamesResetPasswordNotification($token));
    }
}
