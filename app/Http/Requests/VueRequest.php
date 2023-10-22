<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VueRequest extends FormRequest
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
            'titulo' => 'required|min:5|max:25',
            'descricao' => 'required|min:10|max:1000',
            'link' => 'required|url',
            'imagem' => 'required|url',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required' => 'O campo título é obrigatório.',
            'titulo.min' => 'O campo título deve ter pelo menos :min caracteres.',
            'titulo.max' => 'O campo título não pode ter mais de :max caracteres.',
            'descricao.required' => 'O campo descrição é obrigatório.',
            'descricao.min' => 'O campo descrição deve ter pelo menos :min caracteres.',
            'descricao.max' => 'O campo descrição não pode ter mais de :max caracteres.',
            'link.required' => 'O campo link é obrigatório.',
            'link.url' => 'O campo link deve ser uma URL válida.',
            'imagem.required' => 'O campo image é obrigatório.',
            'imagem.url' => 'O campo image deve ser uma URL válida.',
        ];
    }
}
