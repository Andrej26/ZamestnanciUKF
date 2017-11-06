<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rola extends Model
{
    protected $table='rolaPouzivatela';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['rola'];
}