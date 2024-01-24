<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Church extends Model
{
    use HasFactory;
    public $fillable=['*'];

    /**
     * Get the shepherds for the Church.
     */
    public function shepherds(): HasMany
    {
        return $this->hasMany(Shepherd::class);
    }
}
