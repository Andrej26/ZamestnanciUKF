<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Publikacia extends Model
{
    protected $table='Publikacia';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['rok','nazov'];
}