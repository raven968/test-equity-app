<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bedroom;
use App\Http\Requests\BedroomRequest;

class BedroomController extends Controller
{

    public function store( BedroomRequest $req)
    {
        $bedroom = Bedroom::create($req->validated());

        return $bedroom;
    }

    public function status(Request $req, Bedroom $bedroom) 
    {
        return $bedroom->status;
    }

    public function capacity(Request $req, Bedroom $bedroom) 
    {
        return $bedroom->capacity;
    }

    public function freeCapacity(Request $req, Bedroom $bedroom)
    {
        return count($bedroom->guests);
    }
}
