<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Titul extends Model
{
    protected $table='titul';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['nazov'];
}