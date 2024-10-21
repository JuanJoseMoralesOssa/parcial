<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    // /**
    //  * Los atributos que deben ser convertidos a tipos nativos.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'is_exotic' => 'boolean',
    //     'is_perennial' => 'boolean',
    //     'germination_date' => 'date',
    //     'average_water_needs' => 'decimal:2',
    //     'planted_at' => 'date',
    // ];
}
