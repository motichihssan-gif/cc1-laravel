<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EvenementController;

Route::get('/', function () {
    return redirect()->route('evenements.index');
});

Route::resource('evenements', EvenementController::class);

// À SUPPRIMER APRÈS UTILISATION : Route temporaire pour migrer la base sur le serveur distant
Route::get('/migrate', function () {
    try {
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', ['--seed' => true, '--force' => true]);
        return "Migrations et Seeds terminés avec succès ! <a href='/'>Retour à l'accueil</a>";
    } catch (\Exception $e) {
        return "Erreur lors de la migration : " . $e->getMessage();
    }
});
