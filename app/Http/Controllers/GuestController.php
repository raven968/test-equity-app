<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use App\Http\Requests\GuestRequest;

class GuestController extends Controller
{
    public function store (GuestRequest $req)
    {
        $guest = Guest::create($req->validated());

        return $guest;
    }
}
