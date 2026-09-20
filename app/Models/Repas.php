<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'photo',
        'categorie',
        'ingredients',
        'lien_video',
        'type_repas',
    ];

    protected function casts(): array
    {
        return [
            'ingredients' => 'array',
            'lien_video' => 'array',
        ];
    }

    public function historique()
    {
        return $this->hasMany(RepasHistorique::class);
    }
}