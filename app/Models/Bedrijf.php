<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bedrijf extends Model
{
    use HasFactory;

    public function contacts(): HasMany
    {
        return $this->hasMany(Contact::class);
    }

    public function gespreks(): HasMany
    {
        return $this->hasMany(Gesprek::class);
    }
}