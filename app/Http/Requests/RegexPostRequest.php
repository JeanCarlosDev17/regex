<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegexPostRequest extends FormRequest
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
        return [
            'nombre'=>'regex:/^[a-z,A-Z, ]{2,30}$/i',
            'apellido'=>'regex:/^[a-z,A-Z]{2,30}$/i',
            'tipo'=>array('regex:/((ps)|(cc)|(ti))/i'),
            'id'=>'regex:/^[a-z,0-9]{5,12}$/i',
            'correo'=>'regex:/(\w)+(@)(\w)+(\.)[a-z]{2,3}/i'
        ];
    }

    public function messages()
    {
        return [
            'nombre.regex' => 'El nombre no cumple con un formato valido',
            'apellido.regex' => 'El apellido no cumple con un formato valido',
            'tipo.regex' => 'El tipo no cumple con un formato valido',
            'id.regex' => 'El número de documento no cumple con un formato valido',
            'correo.regex'=>'El correo electronico no cumle con un formato valido'
        ];
    }


}
