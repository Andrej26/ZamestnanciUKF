<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ZamesResetPasswordNotification;

class Zamestnanec extends Authenticatable
{
    use Notifiable;

    protected $guard = 'zame';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='zamestnanci';

    protected $fillable = [
        'name', 'email', 'password','stav'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ZamesResetPasswordNotification($token));
    }
}
