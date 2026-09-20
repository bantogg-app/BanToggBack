<?php

namespace Database\Seeders;

use App\Models\Repas;
use Illuminate\Database\Seeder;

class RepasSeeder extends Seeder
{
    public function run(): void
    {
        $plats = [
            ['nom' => 'Thiéboudienne rouge', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'poisson', 'tomate', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiéboudienne blanc', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'poisson', 'oignon', 'huile'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Yassa poulet', 'categorie' => 'poulet', 'type_repas' => 'les_deux', 'ingredients' => ['poulet', 'oignon', 'citron', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Yassa poisson', 'categorie' => 'poisson', 'type_repas' => 'les_deux', 'ingredients' => ['poisson', 'oignon', 'citron', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mafé viande', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['viande', 'arachide', 'riz', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mafé poulet', 'categorie' => 'poulet', 'type_repas' => 'les_deux', 'ingredients' => ['poulet', 'arachide', 'riz', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poisson braisé', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['poisson', 'oignon', 'piment', 'attiéké'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poulet braisé', 'categorie' => 'poulet', 'type_repas' => 'diner', 'ingredients' => ['poulet', 'oignon', 'piment'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Domoda', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['viande', 'tomate', 'arachide', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Soupou kandia', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['poisson', 'gombo', 'huile de palme', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'légumes', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou poisson', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['poisson', 'légumes', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Bassi salté', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['couscous', 'viande', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Lakh', 'categorie' => 'non_proteine', 'type_repas' => 'dejeuner', 'ingredients' => ['mil', 'lait caille', 'sucre'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Ndambé', 'categorie' => 'non_proteine', 'type_repas' => 'dejeuner', 'ingredients' => ['niébé', 'huile', 'oigeon'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Chawarma poulet', 'categorie' => 'poulet', 'type_repas' => 'diner', 'ingredients' => ['poulet', 'pain', 'légumes', 'sauce'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poisson farci', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['poisson', 'farce', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Ragoût de viande', 'categorie' => 'viande', 'type_repas' => 'diner', 'ingredients' => ['viande', 'tomate', 'pomme de terre'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Riz au gras', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'viande', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Couscous poulet', 'categorie' => 'poulet', 'type_repas' => 'les_deux', 'ingredients' => ['couscous', 'poulet', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Soupe kandia viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'gombo', 'huile de palme', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Attiéké poisson', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['attiéké', 'poisson', 'oignon'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Sombi', 'categorie' => 'non_proteine', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'lait de coco', 'sucre'], 'photo' => null, 'lien_video' => []],
        ];

        foreach ($plats as $plat) {
            Repas::create($plat);
        }
    }
}