@extends('auth.masterauth')

@section('content')
<div class="mx-auto bg-white shadow-2xl rounded-xl lg:w-1/3 w-80">
    <div class="">
        <img src="{{ asset('assets/img/logo.png') }}" class="w-1/3 mx-auto lg:mt-20 mt-24 pt-3" alt="">
        <h1 class="font-bree_serif text-center mt-3 text-xl lg:text-3xl">Masuk Akun</h1>
    </div>

    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissable fade-show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    <form class="card-body mx-auto" action="{{ route('signin.authenticate') }}" method="post">
        @csrf
        <div class="form-group input-group">
            <input name="email" autofocus class="border-none caret-transparent bg-slate-200 rounded-2xl form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Email" type="email" required>
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div> <!-- form-group// -->

        <div class="form-group input-group">
            <input name="password" class="form-control border-none bg-slate-200 rounded-2xl" placeholder="Password" type="password" required>
        </div> <!-- form-group// -->

        <div class="form-group">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 w-full h-10 rounded-3xl text-white font-bree_serif"> Masuk </button>
        </div> <!-- form-group// -->

        <p class="text-center font-bree_serif pb-3">Belum punya akun? <a href="{{ route('regis.index') }}">Daftar</a> </p>
    </form> <!-- card.// -->
    <!--container end.//-->
</div>

@endsection