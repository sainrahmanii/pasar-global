@extends('user.masterdesc')
@section('content')
<div class="grid gap-1 sm:grid-cols-2 lg:grid-cols-5">

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    <div class="columns-1 ">
        <a href="{{ route('products.create') }}">
            <div class="w-64 h-96 hover:shadow-xl bg-white border-b-2 rounded-2xl mt-10 ml-2 mr-2 cursor-pointer group overflow-hidden group-hover:flex">
                <div class="group-hover:blur-sm">
                    <img src="{{ asset('assets/img/banner.png') }}" alt="" class="max-w-sm h-48 group-hover:z-0">
                    <span class="font-bree_serif text-xl text-black pt-2 ml-2">Nama Produk</span>
                    <p class="font-bree_serif text-xl text-green-400 text-right -mt-7 mr-2">Rp 500.000</p>
                    <p class="mt-4 ml-2 mr-2 text-justify indent-2 font-bree_serif font-xs">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat dolorem, eligendi nobis qui labore suscipit?</p>
                    <span class="flex justify-end mr-4 mt-2">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 mt-2 mr-2 text-slate-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            <p class="my-2 font-bree_serif text-sm text-slate-500">Kota Cirebon</p>
                        </svg>

                    </span>
                </div>
                <div class="group-hover:m-auto mx-auto group-hover:-mt-56 w-20 h-20 mt-20 animate-bounce">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                    </svg>
                </div>
            </div>
        </a>

    </div>

    

</div>

@endsection