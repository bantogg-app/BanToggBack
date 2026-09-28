<?php

namespace Database\Seeders;
use App\Models\Repas;

use Illuminate\Database\Seeder;

class RepasSeeder extends Seeder
{
    public function run(): void
    {
        Repas::truncate();

        $plats = [
            ['nom' => 'Thiéboudienne rouge', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'poisson', 'tomate', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiéboudienne blanc', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'poisson', 'oignon', 'huile'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Yassa poulet', 'categorie' => 'poulet', 'type_repas' => 'dejeuner', 'ingredients' => ['poulet', 'oignon', 'citron', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Yassa poisson', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['poisson', 'oignon', 'citron', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Yassa viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'oignon', 'citron', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mafé viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'arachide', 'riz', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mafé poulet', 'categorie' => 'poulet', 'type_repas' => 'dejeuner', 'ingredients' => ['poulet', 'arachide', 'riz', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poisson braisé', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['poisson', 'oignon', 'piment', 'attiéké'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poulet braisé', 'categorie' => 'poulet', 'type_repas' => 'diner', 'ingredients' => ['poulet', 'oignon', 'piment'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Viande braisée', 'categorie' => 'viande', 'type_repas' => 'diner', 'ingredients' => ['viande', 'oignon', 'piment'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Domoda', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'tomate', 'arachide', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Soupou kandia', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['poisson', 'gombo', 'huile de palme', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'légumes', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou poisson', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['poisson', 'légumes', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou guinar', 'categorie' => 'poulet', 'type_repas' => 'dejeuner', 'ingredients' => ['poulet', 'légumes', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou boulette', 'categorie' => 'poisson', 'type_repas' => 'dejeuner', 'ingredients' => ['boulettes de poisson', 'tomate', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou carry', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'curry', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiou diw tirr', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Bassi salté', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['couscous', 'viande', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiéré mboum', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['couscous', 'feuilles de baobab', 'viande'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Lakh', 'categorie' => 'non_proteine', 'type_repas' => 'les_deux', 'ingredients' => ['mil', 'lait caillé', 'sucre'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiakiry', 'categorie' => 'non_proteine', 'type_repas' => 'les_deux', 'ingredients' => ['mil', 'lait caillé', 'sucre'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Ndambé', 'categorie' => 'non_proteine', 'type_repas' => 'les_deux', 'ingredients' => ['niébé', 'huile', 'oignon'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mborokhe', 'categorie' => 'non_proteine', 'type_repas' => 'dejeuner', 'ingredients' => ['mil'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Mbourou mban', 'categorie' => 'non_proteine', 'type_repas' => 'dejeuner', 'ingredients' => ['mil'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Chawarma poulet', 'categorie' => 'poulet', 'type_repas' => 'diner', 'ingredients' => ['poulet', 'pain', 'légumes', 'sauce'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Poisson farci', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['poisson', 'farce', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Ragoût de viande', 'categorie' => 'viande', 'type_repas' => 'diner', 'ingredients' => ['viande', 'tomate', 'pomme de terre'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'thieb bou toye', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['riz', 'viande', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Couscous poulet', 'categorie' => 'poulet', 'type_repas' => 'les_deux', 'ingredients' => ['couscous', 'poulet', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Soupe kandia viande', 'categorie' => 'viande', 'type_repas' => 'dejeuner', 'ingredients' => ['viande', 'gombo', 'huile de palme', 'riz'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Attiéké poisson', 'categorie' => 'poisson', 'type_repas' => 'diner', 'ingredients' => ['attiéké', 'poisson', 'oignon'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Vermicelle poulet', 'categorie' => 'poulet', 'type_repas' => 'diner', 'ingredients' => ['vermicelle', 'poulet', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Vermicelle viande', 'categorie' => 'viande', 'type_repas' => 'diner', 'ingredients' => ['vermicelle', 'viande', 'légumes'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiébou yapp guinar', 'categorie' => 'poulet', 'type_repas' => 'les_deux', 'ingredients' => ['riz', 'poulet'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Thiébou yapp', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['riz', 'viande'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Bolognaise', 'categorie' => 'viande', 'type_repas' => 'les_deux', 'ingredients' => ['pâtes', 'viande hachée', 'tomate'], 'photo' => null, 'lien_video' => []],
            ['nom' => 'Sombi', 'categorie' => 'non_proteine', 'type_repas' => 'les_deux', 'ingredients' => ['riz', 'lait de coco', 'sucre'], 'photo' => null, 'lien_video' => []],
        ];

        foreach ($plats as $plat) {
            Repas::create($plat);
        }
    }
}