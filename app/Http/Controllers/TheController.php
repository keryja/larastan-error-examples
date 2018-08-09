<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TheRelationModel;
use App\TheModel;

class TheController extends Controller
{
    public function index()
    {
        $theModel = TheModel::where(['name' => 'foo'])->first();
        abort_if(!$theModel, 404);

        $theRelation = $theModel->theRelation()->where(['name' => 'bar'])->first();
        abort_if(!$theRelation, 404);
    }
}
