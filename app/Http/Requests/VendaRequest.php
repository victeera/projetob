<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class VendaRequest extends Request
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
            "name" => 'required',
            "quantidade" => 'required|numeric',
        ];
    }

    public function messages(){
        return[
            'name.required' => "Selecione uma opção",
            'quantidade.required'  => "Preencha o campo QUANTIDADE",
            'quantidade.numeric' => "Digite um valor QUANTIDADE válido"
        ];
    }
}
