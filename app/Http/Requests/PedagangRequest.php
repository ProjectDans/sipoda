<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedagangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nm_pedagang' => 'required',
            'nik_pedagang' => 'required',
            'alamat_pedagang' => 'required'
        ];
    }
}
