<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'club_id',
            'client_id',
            'date',
            'startTime',
            'endTime' => ['required']
        ];
    }
}
