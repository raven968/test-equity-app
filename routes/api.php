<?php

use Illuminate\Support\Facades\Route;
//CONTROLLERS
use App\Http\Controllers\{BedroomController, GuestController};
//NOTA: Tambien puedo hacer un provider para las rutes de 'api' para evitar importar los controladores, pero por ser dos controladores no lo vi necesario

Route::get('bedroom/status/{bedroom}',[BedroomController::class,'status'])->name('bedroom_status');
Route::get('bedroom/capacity/{bedroom}',[BedroomController::class,'capacity'])->name('capacity');
Route::get('bedroom/free-capacity/{bedroom}',[BedroomController::class,'freeCapacity'])->name('free_capacity');

Route::post('bedroom', [BedroomController::class, 'store'])->name('bedroom_store');
Route::post('guest', [GuestController::class, 'store'])->name('guest_store');

Route::post('bedroom/{bedroom}/add-guest', [BedroomController::class,'addGuest'])->name('add_guest');
Route::delete('bedroom/{bedroom}/', [BedroomController::class,'destroy'])->name('destroy_guest');
