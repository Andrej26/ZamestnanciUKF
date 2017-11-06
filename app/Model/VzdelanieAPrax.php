<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class VzdelanieAPrax extends Model
{
    protected $table='vzdelanieAPrax';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['rok','popis','vzdelanie'];
}