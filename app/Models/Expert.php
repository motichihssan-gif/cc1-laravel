<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['nomExp', 'prénomExp', 'télExp', 'SpécialitéExp', 'EmailExp'];

    public function evenements()
    {
        return $this->hasMany(Evenement::class);
    }
}
