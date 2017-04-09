<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CadastroRequest extends Request
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
		     "name" => 'required|max:100',
			  "quantidade" => 'required|integer',
			  "precount" => 'required|regex:/^\d{1,}[.,]\d{1,}$/',
			  "precobalde" => 'required|regex:/^\d{1,}[.,]\d{1,}$/',
			  "tipo" => 'required|max:100'
        ];
    }

    public function messages()
    {
	    return [
	    	'name.required' => "Preencha o campo NOME",
	    	'name.max' => "Você atingiu o limite de caracteres",
	    	'quantidade.required' => "Preencha o campo QUANTIDADE",
	    	'quantidade.integer' => "Digite um valor QUANTIDADE válido",
	    	'precount.required' => "Preencha o campo PREÇO UNIDADE",
	    	'precount.regex' => "Digite um valor PREÇO UNIDADE válido",
	        'precobalde.required' => "Preencha o campo PREÇO BALDE",
            'precobalde.regex' => "Digite um valor PREÇO BALDE válido",
            'tipo.required' => "Preencha o campo TIPO",
	    	'tipo.max' => "Digite um valor TIPO válido",

	    ];
    }


}
