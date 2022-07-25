<?php

namespace App\Http\Requests\Admin\DataPerusahaan;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'nama_perusahaan'  => 'required|unique:superadmin__dataperusahaan',
            'no_handphone'  => 'required|unique:superadmin__dataperusahaan',
            'email'  => 'required|unique:superadmin__dataperusahaan',
            'alamat'  => 'required'
        ];
    }

    public function messages()
    {
        return[
            'required' => 'Wajib diisi.',
            'unique' => 'Data sudah terdaftar.'
        ];
    }
}
