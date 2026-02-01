<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBikeRequest extends FormRequest
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
            "manufacturer" => ["required","string","max:30"],
            "model" => ["required","string","max:15"],
            "license_plate" => ["required","string","max:9"],
            "color" => ["required","string","max:30"],
            "horsepower" => ["required","integer"],
            "consumption" => ["nullable", "numeric", "min:0"],
            "year" => ["required",],
            "owner_id" => ["required", "integer", "exists:owners,id"],
        ];
    }
}
