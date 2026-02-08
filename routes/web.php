<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Character;
use App\Models\Superpower;

// 1. Ruta para Universes
Route::get('/universes', function () {
    // Trae todos los registros de la tabla universes
    $universes = Universe::all(); 
    // Manda los datos a la vista 'universes'
    return view('universes', compact('universes'));
});

// 2. Ruta para Superheroes (usando el modelo Character)
Route::get('/superheroes', function () {
    $superheroes = Character::all();    
    return view('superheroes', compact('superheroes'));
});

// 3. Ruta para Superpowers
Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});