<?php

namespace App\Http\Requests\Achievements;

use JetBrains\PhpStorm\ArrayShape;
use Illuminate\Foundation\Http\FormRequest;

class ValidateStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    #[ArrayShape(['name' => "string", 'slug' => "string", 'description' => "string", 'expression' => "string"])]
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'slug' => 'sometimes|required|nullable|string',
            'description' => 'sometimes|required|nullable|string',
            'expression' => 'required|string'
        ];
    }

//    /**
//     * @return string[]
//     */
//    #[ArrayShape(['name' => "string", 'slug' => "string", 'description' => "string", 'expression' => "string"])]
//    public function messages(): array
//    {
//        return [
//            'name' => 'Achievement name is required and must be a string!',
//            'slug' => 'Achievement slug must be a string!',
//            'description' => 'Achievement description must be a string!',
//            'expression' => 'Achievement expression is required and must be a string!'
//        ];
//    }
}
