<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ClenstvoVOrganizacii extends Model
{
    protected $table='clenstvoVOrganizacii';
    protected $primaryKey=''; /*treba potom doplniť názov primárneho klúča*/
    protected  $fillable = ['trvanie', 'popis'];
}