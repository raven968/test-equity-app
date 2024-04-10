<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Bedroom, BedroomGuest};
use App\Http\Requests\BedroomRequest;

class BedroomController extends Controller
{

    public function store( BedroomRequest $req)
    {
        $bedroom = Bedroom::create($req->validated());

        return $bedroom;
    }

    public function addGuest(Request $req, Bedroom $bedroom)
    {
        $bedroom_guest = BedroomGuest::create([
            'bedroom_id' => $bedroom->id,
            'guest_id' => $req->guest_id
        ]);

        
        return "Agregado Correctamente";
        
    }

    public function destroy(Request $req, Bedroom $bedroom)
    {
        BedroomGuest::where('bedroom_id', $bedroom->id)->where('guest_id', $req->guest_id)->delete();

        return "Removido correctamente";
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
