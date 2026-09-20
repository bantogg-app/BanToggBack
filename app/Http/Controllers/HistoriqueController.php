<?php

namespace App\Http\Controllers;

use App\Models\RepasHistorique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoriqueController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'repas_id' => 'required|exists:repas,id',
            'device_id' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        $historique = RepasHistorique::create([
            'user_id' => Auth::id(),
            'device_id' => $validated['device_id'] ?? null,
            'repas_id' => $validated['repas_id'],
            'date' => $validated['date'] ?? now(),
        ]);

        return response()->json([
            'message' => 'Repas ajouté à l’historique.',
            'historique' => $historique->load('repas'),
        ], 201);
    }

    public function index(Request $request)
    {
        $query = RepasHistorique::with('repas')
            ->orderBy('date', 'desc');

        if (Auth::check()) {
            $query->where('user_id', Auth::id());
        } elseif ($request->device_id) {
            $query->where('device_id', $request->device_id);
        } else {
            return response()->json([
                'message' => 'Identifiant utilisateur ou device requis.',
            ], 400);
        }

        return response()->json([
            'historique' => $query->get(),
        ]);
    }

    public function destroy(Request $request, $id)
    {
        $historique = RepasHistorique::findOrFail($id);

        $estProprietaire = Auth::check()
            ? $historique->user_id === Auth::id()
            : ($request->device_id !== null && $historique->device_id === $request->device_id);

        if (!$estProprietaire) {
            return response()->json([
                'message' => 'Non autorisé.',
            ], 403);
        }

        $historique->delete();

        return response()->json([
            'message' => 'Repas supprimé de l’historique.',
        ]);
    }
}