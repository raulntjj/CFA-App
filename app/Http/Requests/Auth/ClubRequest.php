<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClubRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        //Aqui será inserido as regras conforme for solicitado.
        return [
            'name' => ['required', 'min:5'],
            'cnpj',
            'address',
            'number',
            'neighborhood',
            'city',
            'state',
            'country',
            'cep',
            'email',
            'telephone' => ['required']

        ];
    }
}
