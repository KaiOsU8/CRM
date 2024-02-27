<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gesprek extends Model
{
    use HasFactory;

    public function bedrijf(): BelongsTo
    {
        return $this->belongsTo(Bedrijf::class);
    }
    
}
