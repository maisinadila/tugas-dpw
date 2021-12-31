<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'nama' => 'required',
            'username' => 'required|unique:user,username|min:5',
            'email' => 'required|email:dns'
        
            //
        ];
    }

    public function messages()
{
    return [
        'nama.required' => '*Field Nama Wajib Diisi',
        'username.required' => '*Field Username wajib diisi',
        'username.unique' => '*Username Sudah Tersedia',
        'email.required' => '*Email Wajib Diisi',
    ];
}
}