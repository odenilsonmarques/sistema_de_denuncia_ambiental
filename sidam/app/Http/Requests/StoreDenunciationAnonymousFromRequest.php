<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreDenunciationAnonymousFromRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//por default esse valor vem false, pq se usa este para trabalhar com ACL E authorization, porem como não é caso altereri para true. 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //a validacao abaixo poderia ser separada por uma barra, porem é apenas uma outra forma de fazer. No meu caso, preferir usar um array
            'category'=>['required'],
            'distric'=>['required','string','min:2','max:30'],
            'road'=>['required','string','min:1','max:30'],
            'annex_one'=>['required','image'],
            'annex_two'=>['nullable','image'],
            'annex_three'=>['nullable','image'],
            'description'=>['required','string','min:3','max:100']
        ];
    }
    public function messages() //funcaão criada para exibir as mensagem
    {
        return [
            'category.required'=>'O campo categoria é obrigatório',

            'distric.required'=>'O campo bairro é obrigatório',
            'distric.min'=>'O campo bairro deve ter no mínimo 2 caracteres',
            'distric.max'=>'O campo bairro deve ter no maximo 30 caracteres',

            'road.required'=>'O campo rua é obrigatório',
            'road.min'=>'O campo rua deve ter no mínimo 1 caractres',
            'road.max'=>'O campo rua deve ter no maximo 30 caractres',

            'annex_one.required'=>'O campo anexo um é obrigatório',
            'annex_one.image'=>'O campo anexo um deve ser uma imagem',
            
            'annex_two.nullable.image'=>'O campo anexo dois deve ser uma imagem',
            
            'description.required'=>'O campo descrição é obrigatório',
            'description.min'=>'O campo descrição deve ter no mínimo 3 caractres',
            'description.max'=>'O campo descrição deve ter no maximo 100 caractres'
        ];
    }
}
