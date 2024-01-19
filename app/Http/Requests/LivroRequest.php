<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules() {
        $rules = [
            'title' => 'required',
            'autor' => 'required',
            'isbn' => ['required', 'size:13', 'integer']
        ];

        if ( $this->method() =='PATCH' || $this->method() == 'PUT' ){
            array_push( $rules['isbn'], 'unique:livros,isbn,' . $this->livro->id );
        } else {
            array_push( $rules['isbn'], 'unique:livros,isbn' );
        }

        return $rules;
    }

    protected function prepareForValidation() {
        $this->merge([
            'isbn' => preg_replace('/[^0-9]/', '', $this->isbn)
        ]);
    }

    public function messages() {
        return [
            'title.required' => 'O campo título é obrigatório',
            'autor.required' => 'O campo autor é obrigatório',
            'isbn.required' => 'O campo ISBN é obrigatório',
            'isbn.size' => 'O ISBN deve ter 13 dígitos',
            'isbn.unique' => 'O ISBN já está cadastrado',
            'isbn.integer' => 'O ISBN deve ser um número inteiro'
        ];
    }
}
