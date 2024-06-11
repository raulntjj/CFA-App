<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientWeaponRequest extends FormRequest
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
            'client_id',
            'weaponCategory_id',
            'weaponManufacturer_id',
            'weaponBrand_id',
            'weaponModel_id',
            'serialNumber',
            'registerNumber',
            'gauge',
            'manufacturingDate',
            'validityLicenseDate'.
            'validityRegistrationDate',
            'registratioCertificate',
            'license',
            'inspectionMark',
            'modificationMark' => ['required']
        ];
    }
}
