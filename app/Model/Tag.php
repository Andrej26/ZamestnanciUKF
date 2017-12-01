<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    protected $table = 'tags';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'name'];

    public function zamestnanci()
    {
        return $this->belongsToMany('App\Model\Zamestnanec', 'zamestnanec_tag', 'tag_id', 'zamestnanec_id');
    }
}
