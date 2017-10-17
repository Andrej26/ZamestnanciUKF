<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamestnanci extends Model
{
    protected $table='zamestnanci';

    protected  $fillable = ['meno', 'priezvisko', 'email', 'heslo', 'vek', 'telefón'];
}
