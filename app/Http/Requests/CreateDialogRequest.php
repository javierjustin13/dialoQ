<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDialogRequest extends FormRequest
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
            'title' => 'required|min:2|max:50',
            'content' => 'required|min:2|max:500'
        ];
    }
}
