<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Projekt extends Model
{
    protected $table='Projekt';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['trvanie', 'popis'];

}