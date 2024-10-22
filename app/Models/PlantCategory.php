<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PlantCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'is_active',
        'priority',
        'growth_rate'
    ];

    public function plants(): HasMany
    {
        return $this->hasMany(Plant::class, 'category_id', 'id');
    }
}
