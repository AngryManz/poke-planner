<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VariantType extends Model
{
    protected $fillable = [
        'name',
        'is_foil_default'
    ];

    protected $casts = [
        'is_foil_default' => 'boolean'
    ];

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }
}
