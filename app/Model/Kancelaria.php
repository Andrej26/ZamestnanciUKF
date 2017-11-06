<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Kancelaria extends Model
{
    protected $table='Kancelaria';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['oznacenie'];
}