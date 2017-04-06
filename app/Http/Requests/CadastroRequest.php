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
		     "name" => "required",
			  "quantidade" => "required","intenger",
			  "precount" => "required",
			  "precobalde" => "required",
			  "tipo" => "required"
        ];
    }

    public function messages()
    {
	    return [
	    	'name.required' => "Nome do Produto, não pode está vazio",
	    	'quantidade.required' => "Quatidade, não pode está vazio",
	    	'quantidade.intenger' => "Digite uma quantidade válida",
	    	'precount.required' => " Preço quantidade, não pode está vazio",
	    	'precobalde.required' => "Preço do Balde, não pode está vazio",
	    	'tipo.required' => "Tipo, não pode está vazio"

	    ];
    }


}
