<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMedicoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => [
                'required',
                'min:5',
                'max:30',
            ],
            'idade' => [
                'required',
                'min:2',
                'max:3',
            ],
            'especializacao' => [
                'required',
                'min:5',
                'max:20',
            ],
            'hospital' => [
                'required',
                'min:5',
                'max:30',
            ],
            'crm' => [
                'required',
                 'max:12',
            ],
        ];
    }
}
