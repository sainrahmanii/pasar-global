<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'no_whatsapp'   => '85213221817',
            'email_verified_at'   => date('Y-m-d H:i:s', time()),
            'alamat'        => 'Dukupuntang, Kab.Cirebon',
            'password'      => \bcrypt('P455word*1850*MDT'),
            'role'          => 'admin',
        ]);
    }
}
