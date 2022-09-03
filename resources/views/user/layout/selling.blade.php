@extends('user.masterdesc')
@section('content')

<div class="columns-2 mt-20">
    <img src="{{ asset('assets/img/banner.png') }}" class="w-3/4 mx-auto" alt="">
    <div class="text-left">
        <p class="lg:pt-16 mt-7  lg:text-5xl text-2xl text-gray-800 font-extrabold  font-bree_serif">Tingkatkan Konsumen <br> Yang Signfikan, Dengan Memulai Penjualanmu Sekarang</p>
        <button class="rounded-3xl mt-10 text-xl font-calistoga text-white w-52 h-12 bg-blue-600 hover:bg-blue-800">Join Now</button>
    </div>
</div>

<div class="mt-24 text-center">
    <!-- <h1 class="text-4xl font-calistoga">Cara mendaftarkan produk atau jasamu disini</h1> -->
</div>

<div class="banner">
    <div class="row">
        <div class="lg:columns-2 mt-12 lg:mt-52">
            <div>
                <img src="{{ asset('assets/img/step1.png') }}" class="lg:w-1/2 lg:ml-56 w-56 mx-auto lg:mx-0 lg:-mt-24 lg:visible visible" alt="">
            </div>

            <div class="space-y-5 lg:text-left text-center">
                <h1 class="font-bold text-yellow-500 mt-10 text-3xl font-bree_serif">Memiliki Akun</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Anda wajib memiliki akun sebelum <br>mendaftarkan produk anda disini</p>
                <a href="{{ route('regis.index') }}"><button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Daftar Akun</button></a>
            </div>
        </div>
        <div class="lg:columns-2 mt-12 lg:mt-36">
            <div>
                <img src="{{ asset('assets/img/step2.png') }}" class="lg:w-1/2 w-56 mx-auto lg:mx-0 lg:-mt-36 lg:hidden visible" alt="">
            </div>
            <div class="space-y-5 lg:text-left lg:ml-56 lg:mt-24 text-center">
                <h1 class="font-bold mt-10 text-3xl text-indigo-900 font-bree_serif">Mengisi Form</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Kami telah menyediakan form<br>untuk melengkapi keterangan produk anda</p>
                <a href="{{ route('register.product') }}"><button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Isi Form</button></a>
            </div>

            <div>
                <img src="{{ asset('assets/img/step2.png') }}" class="lg:w-1/2 w-56 mx-auto lg:mx-0 lg:-mt-36 lg:visible invisible" alt="">
            </div>
        </div>
        <div class="lg:columns-2 -mt-56 lg:mt-56 pb-12">
            <div>
                <img src="{{ asset('assets/img/step3.png') }}" class="lg:w-1/2 lg:ml-56 w-56 mx-auto lg:mx-0 lg:-mt-24" alt="">
            </div>

            <div class="space-y-5 lg:text-left sm:text-center">
                <h1 class="font-bold mt-10 text-green-600 text-3xl font-bree_serif">Menghubungi Admin</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Jika produkmu telah berhasil diregistrasikan<br>tahap selanjutnya menghubungi admin dan <br> selesaikan admin registrasi</p>
                <button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Hubungi Admin</button>
            </div>
        </div>
    </div>
</div>

@endsection