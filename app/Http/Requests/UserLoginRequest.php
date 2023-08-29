<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' =>'required|email',
            'password' => 'required|min:8',
        ];
    }

    public function messages()
    {
        return [
           'email.required' => 'Le champ email est obligatoire',
           'email.email' => 'Le champ email n\'est pas  correct',
           'password.required' => 'Le champ mot de passe est obligatoire',
           'password.min' => 'Le champ mot de passe doit contenir au moins 8 caracteres ',
           //'mot_de_passe.confirmed' => 'La confirmation du mot de passe ne correspond pas',
        ];
    }
}
