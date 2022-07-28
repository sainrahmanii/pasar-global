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
            'nama_produk'   => 'required|max:150',
            'no_whatsapp'   => 'required|max:13',
            'provinsi'      => 'required|max:100',
            'kota'          => 'required|max:100',
            'kecamatan'     => 'required|max:100',
            'kelurahan'     => 'required|max:100',
            'deskripsi'     => 'required|max:500',
        ];
    }
}
