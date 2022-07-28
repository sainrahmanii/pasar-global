<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('admin.user.user');
    }

    public function showpesanan()
    {
        return view('admin.pesanan.pesanan');
    }

    public function showregistrasiproduk()
    {
        return view('admin.registrasiproduk.registrasi');
    }

    public function showproduk()
    {
        return view('admin.produk.produk');
    }
}
