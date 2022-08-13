<?php

namespace Database\Seeders;

use App\Models\FormAdmin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FormAdmin::create([
            'id'        =>1,
            'user_id'   =>'1',
            'nama_produk'   =>'Jersey Timnas Indonesia',
            'no_registrasi'   =>'20022102',
            'deskripsi'   =>'oke, mantaaap...!',
            'provinsi'   =>'Jawa Barat',
            'kota_kabupaten'   =>'pekalipan',
            'kecamatan'   =>'pekalipan',
            'kelurahan_desa'   =>'pekalipan',
            'harga'   =>'500000',
            'jasa'   =>'Textile',
            'foto_produk_atau_jasa'   =>'dami-dami',
            'status_pembayaran_registrasi'   =>'PENDING',
        ]);
    }
}
