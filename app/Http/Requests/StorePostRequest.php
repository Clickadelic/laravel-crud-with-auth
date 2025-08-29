<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Ein Titel ist erforderlich.',
            'title.string' => 'Der Titel muss eine Zeichenkette sein.',
            'title.max' => 'Der Titel darf nicht länger als 255 Zeichen sein.',
            'content.required' => 'Der Content ist erforderlich.',
            'content.string' => 'Der Content muss eine Zeichenkette sein.',
        ];
    }
}
