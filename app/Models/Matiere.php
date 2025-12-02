<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matiere extends Model
{
    protected $table = 'matiere_id';

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Une matière possède plusieurs chapitres.
     */
    public function chapters(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }
}
