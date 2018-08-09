<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TheRelationModel extends Model
{
    public function theModel()
    {
        return $this->belongsTo(TheModel::class);
    }
}
