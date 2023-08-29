<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createUserRequest extends FormRequest
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
            'email' =>'required|email|unique:users',
            'telephone' => 'required|min:9',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
           'email.required' => 'Le champ email est obligatoire',
           'email.email' => 'Le champ email n\'est pas  correct',
           'email.unique' => 'cet email est deja lie a un compte',
           'telephone.required' => 'Le champ telephone est obligatoire',
           'telephone.min' => 'Le champ telephone doit contenir au moins 9 caracteres',
           'password.required' => 'Le champ mot de passe est obligatoire',
           'password.min' => 'Le champ mot de passe doit contenir au moins 8 caracteres ',
           'password.confirmed' => 'La confirmation du mot de passe ne correspond pas',
           'password_confirmation.required' => 'Le champ de confirmation du mot de passe est obligatoire',
        ];
    }
}
