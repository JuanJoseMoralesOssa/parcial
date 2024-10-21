<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlantRequest extends FormRequest
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
        return
            [
                'name' => 'required|string|max:255',
                'species' => 'required|string|max:255',
                'family' => 'required|string|max:255',
                'height_cm' => 'required|integer|min:0',
                'average_water_needs' => 'required|numeric|min:0',
                'is_exotic' => 'required|boolean',
                'is_perennial' => 'required|boolean',
                'flowering_season' => 'nullable|string|max:255',
                'germination_date' => 'nullable|date',
                'planted_at' => 'nullable|date',
                'description' => 'nullable|string',
            ];
    }
}
