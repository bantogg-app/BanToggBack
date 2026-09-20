<?php

namespace App\Http\Controllers;

use App\Services\SuggestionService;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{
    protected SuggestionService $suggestionService;

    public function __construct(SuggestionService $suggestionService)
    {
        $this->suggestionService = $suggestionService;
    }


    public function suggest(Request $request)
    {
        $validated = $request->validate([
            'proteines' => 'required|array|min:1',
            'proteines.*' => 'in:viande,poisson,poulet,oeufs,sans_proteine',
            'type_repas' => 'required|in:dejeuner,diner,peu_importe',
            'device_id' => 'nullable|string',
        ]);

        $userId = $request->user()?->id;
        $deviceId = $validated['device_id'] ?? null;

        $repas = $this->suggestionService->suggerer(
            $validated['proteines'],
            $validated['type_repas'],
            $userId,
            $deviceId
        );

        if ($repas === null) {
            return response()->json([
                'success' => false,
                'message' => 'Aucune suggestion trouvée, essaie d\'élargir tes critères.',
            ], 200);
        }

        return response()->json([
            'success' => true,
            'data' => $repas,
        ], 200);
    }
}
