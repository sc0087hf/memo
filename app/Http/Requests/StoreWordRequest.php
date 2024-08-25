<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Type\Integer;

class StoreWordRequest extends FormRequest
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
            'categoryId'          => ['required', 'integer'],
            'word'                => ['required','string', 'max:100'],
            'mean'                => ['required','string', 'max:100'],
            'example_sentence_en' => ['required','string', 'max:1000'],
            'example_sentence_ja' => ['required','string', 'max:1000'],
        ];
    }
}
