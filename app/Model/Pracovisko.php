<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pracovisko extends Model
{
    protected $table='Pracovisko';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['nazov'];
}