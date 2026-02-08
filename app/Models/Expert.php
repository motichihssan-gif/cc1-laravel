<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomExp',
        'prénomExp',
        'télExp',
        'SpécialitéExp',
        'EmailExp'
    ];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
