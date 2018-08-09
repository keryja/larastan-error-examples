<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheModel extends Model
{
    public function theRelation()
    {
        return $this->hasOne(TheRelationModel::class);
    }
}
