<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shepherd extends Model
{
    use HasFactory;

    public $fillable=['*'];

    /**
     * Get the Church that owns the Shepherd.
     */
    public function church(): BelongsTo
    {
        return $this->belongsTo(Church::class);
    }
}
