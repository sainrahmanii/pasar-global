@extends('user.mastercheck')
@section('content')

<h1 class="text-center text-slate-600 font-bree_serif text-3xl mt-28">Periksa Data Anda</h1>
<div class="shadow-lg h-3/5 w-3/5 rounded-xl mt-2 mx-auto justify-center">
    <!-- <h1 class="font-bold text-slate-800 font-calistoga text-xl text-center">Check Data</h1> -->

    <div class="columns-2 ml-10 font-serif pt-8 uppercase text-slate-500 disabled:to-neutral-600">
        <h1 class="">nama</h1>
        <h1 class="font-bold">: Husain Rahmani</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="uppercase">Email</h1>
        <h1 class="font-bold">: husainrahmani@example.com</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="uppercase">No Whatsapp</h1>
        <h1 class="font-bold">: +62202020200202</h1>
    </div>
    <div class="columns-2 ml-10 uppercase pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="">Alamat</h1>
        <h1 class="font-bold">: Kota Cirebon</h1>
    </div>
    <div class="columns-2 ml-10 uppercase pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="">Product/Jasa</h1>
        <h1 class="font-bold">: Jersey Timnas 2022</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <h1 class="uppercase">Harga</h1>
        <h1 class="font-bold">: Rp 500.000</h1>
    </div>
    <div class="columns-2 ml-10 pt-2 font-serif text-slate-500 disabled:to-neutral-600">
        <img src="{{ asset('assets/img/banner.png') }}" class="w-36 mx-auto mt-5" alt="">
        <a href="{{ route('products.checkouts') }}"><button class="ml-3 rounded-3xl mt-12 bg-slate-200 h-10 w-44 text-black font-bree_serif hover:bg-blue-700 hover:text-white">Checkout Now</button></a>
    </div>

</div>
@endsection