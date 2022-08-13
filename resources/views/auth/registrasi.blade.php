@extends('auth.masterauth')

@section('content')
<div class="mx-auto bg-white shadow-2xl rounded-xl w-80 lg:w-1/3 mt-5 mb-5">
    
    <div class="">
        <img src="{{ asset('assets/img/logo.png') }}" class="w-1/4 mx-auto pt-2" alt="">
        <h1 class="font-bree_serif text-center mt-3 text-3xl">Daftar Akun</h1>
    </div>
    <form action="{{ route('regis.store') }}" method="POST" class="card-body mx-auto">
        @csrf

        <div class="form-group mt-3 input-group">
            <input name="name" autofocus class="form-control @error('name') is-invalid @enderror border-none bg-slate-200 rounded-2xl" value="{{ old('name') }}" id="name" placeholder="Nama Lengkap" type="text" required>
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>


        <div class="form-group input-group">
            <input name="email" class="form-control @error('email') is-invalid @enderror border-none bg-slate-200 rounded-2xl" value="{{ old('email') }}" id="email" placeholder="Email" type="email" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <input name="alamat" class="form-control @error('alamat') is-invalid @enderror border-none bg-slate-200 rounded-2xl" value="{{ old('alamat') }}" placeholder="Alamat" type="text" required>
            @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="form-group input-group">
            <input name="no_whatsapp" class="form-control @error('no_whatsapp') is-invalid @enderror border-none bg-slate-200 rounded-2xl" value="{{ old('no_whatsapp') }}" placeholder="Nomor Whatsapp (+62)" type="text" required>
            @error('no_whatsapp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <input class="form-control @error('password') is-invalid @enderror border-none bg-slate-200 rounded-2xl" name="password" placeholder="Password" type="password" required>
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 font-bree_serif text-white w-full h-10 rounded-3xl"> Create Account </button>
        </div> <!-- form-group// -->

        <p class="text-center font-bree_serif">Sudah punya akun? <a href="{{ route('signin.index') }}">Masuk</a> </p>
    </form> <!-- card.// -->
    <!--container end.//-->
</div>

@endsection