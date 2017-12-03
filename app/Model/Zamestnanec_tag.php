<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Zamestnanec_tag extends Model
{

    protected $table = 'zamestnanec_tag';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'zamestnanec_id', 'tag_id'];

}