<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plant extends Model
{
    use HasFactory;
    // protected $table = 'plant';

    /**
     * Los atributos asignables masivamente.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'species',
        'family',
        'height_cm',
        'average_water_needs',
        'is_exotic',
        'is_perennial',
        'flowering_season',
        'germination_date',
        'planted_at',
        'description',
        'category_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(PlantCategory::class, 'category_id', 'id');
    }

}
