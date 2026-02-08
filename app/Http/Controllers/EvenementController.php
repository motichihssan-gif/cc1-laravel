<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evenements = Evenement::all();
        return view('evenements.index', compact('evenements'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenement = Evenement::with(['expert', 'ateliers'])->findOrFail($id);
        return view('evenements.show', compact('evenement'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();

        return redirect()->route('evenements.index')
                         ->with('success', 'Événement supprimé avec succès');
    }
}
