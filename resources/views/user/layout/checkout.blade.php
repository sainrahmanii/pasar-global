@extends('user.mastercheck')
@section('content')

<svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 mx-auto mt-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
</svg>
<h1 class="text-center text-green-600 font-bree_serif text-3xl mt-2">Transaksi Anda Berhasil</h1>
<h1 class="text-center text-slate-400 font-bree_serif text-sm mt-2">*Data anda telah berhasil dikirim kepada admin <br>selanjutnya silahkan hubungi penjual pada menu button dibawah ini</h1>
<div class="shadow-lg h-80 w-1/2 rounded-xl mx-auto justify-center">
    <div class="columns-2 ml-10 font-serif uppercase text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold mt-10">no. transaksi</h1>
        <h1 class=" pt-10">: TRX - 2103049321</h1>
    </div>
    <div class="columns-2 ml-10 font-serif pt-2 uppercase text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold ">nama</h1>
        <h1 class="">: Husain Rahmani</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold uppercase">Email</h1>
        <h1 class="">: husainrahmani@example.com</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold uppercase">No Whatsapp</h1>
        <h1 class="">: +62202020200202</h1>
    </div>
    <div class="columns-2 ml-10 uppercase pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold ">Alamat</h1>
        <h1 class="">: Kota Cirebon</h1>
    </div>
    <div class="columns-2 ml-10 uppercase pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold ">Product/Jasa</h1>
        <h1 class="">: Jersey Timnas 2022</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="font-bold uppercase">Harga</h1>
        <h1 class="">: Rp 500.000</h1>
    </div>
    <a href="http://wa.me/+62xxxxx"><button class="rounded-3xl mt-20 ml-60 bg-green-500 h-10 w-44 font-bree_serif hover:bg-green-700 text-white">Hubungi Penjual</button></a>
</div>


@endsection