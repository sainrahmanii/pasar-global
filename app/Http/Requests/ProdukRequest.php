<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nama_produk'   => 'required|max:150|unique:form_admins',
            'no_whatsapp'   => 'required|min:9, max:13',
            'provinsi'      => 'required|max:100',
            'kota_kabupaten'=> 'required|max:100',
            'kecamatan'     => 'required|max:100',
            'kelurahan_desa'=> 'required|max:100',
            'jasa'          => 'required|max:100',
            'harga'         => 'required|max:100',
            'foto_produk_atau_jasa'  => 'required',
            'deskripsi'     => 'required|max:1000'
        ];
    }
}
