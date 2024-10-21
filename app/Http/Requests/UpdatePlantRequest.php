<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|max:255',
            'species' => 'nullable|string|max:255',
            'family' => 'nullable|string|max:255',
            'height_cm' => 'nullable|integer|min:0',
            'average_water_needs' => 'nullable|numeric|min:0',
            'is_exotic' => 'nullable|boolean',
            'is_perennial' => 'nullable|boolean',
            'flowering_season' => 'nullable|string|in:spring,summer,autumn,winter',
            'germination_date' => 'nullable|date',
            'planted_at' => 'nullable|date',
            'description' => 'nullable|string',
        ];
    }
}
