<?php

namespace App\Services;

use App\Models\Repas;
use App\Models\RepasHistorique;
use Carbon\Carbon;

class SuggestionService
{
    public function getRepasConsommes12DerniersJours($userId, $deviceId = null)
    {
        $dateDebut = Carbon::now()->subDays(12);
        $dateFin = Carbon::now();

        $query = RepasHistorique::whereBetween('date', [$dateDebut, $dateFin]);

        if ($userId !== null) {
            $query->where('user_id', $userId);
        }

        if ($deviceId !== null) {
            $query->where('device_id', $deviceId);
        }

        return $query->pluck('repas_id')->unique()->toArray();
    }

    public function suggerer(
        array $proteinesChoisies,
        string $typeRepas,
        ?int $userId = null,
        ?string $deviceId = null
    ) {
        $repasAeviter = $this->getRepasConsommes12DerniersJours(
            $userId,
            $deviceId
        );

        $query = Repas::whereIn('categorie', $proteinesChoisies)
            ->whereNotIn('id', $repasAeviter);

        if ($typeRepas !== 'peu_importe') {
            $query->where(function ($q) use ($typeRepas) {
                $q->where('type_repas', $typeRepas)
                    ->orWhere('type_repas', 'les_deux');
            });
        }

        $repas = $query->get();

        if ($repas->isEmpty()) {
            $queryFallback = Repas::whereIn('categorie', $proteinesChoisies);

            if ($typeRepas !== 'peu_importe') {
                $queryFallback->where(function ($q) use ($typeRepas) {
                    $q->where('type_repas', $typeRepas)
                        ->orWhere('type_repas', 'les_deux');
                });
            }

            $repas = $queryFallback->get();

            if ($repas->isEmpty()) {
                return null;
            }
        }

        return $repas->random();
    }
}