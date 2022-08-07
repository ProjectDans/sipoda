<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'nm_karyawan' => 'required',
            'nik_karyawan' => 'required|min:9',
            'no_tlp_karyawan' => 'required',
            'email_karyawan' => 'required',
            'jabatan_karyawan' => 'required'
        ];
    }
}
