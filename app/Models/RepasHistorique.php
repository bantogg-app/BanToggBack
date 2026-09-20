<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RepasHistorique extends Model
{
    use HasFactory;
    protected $table = 'repas_historique';

    protected $fillable = [
        'user_id',
        'device_id',
        'repas_id',
        'date',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function repas()
    {
        return $this->belongsTo(Repas::class);
    }
}