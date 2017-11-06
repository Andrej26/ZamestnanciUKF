<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class KategoriaTitulu extends Model
{
    protected $table='kategoriaTitulu';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['nazovKategorie'];
}