@extends('user.mastercheck')
@section('content')


<div class="columns-2 mt-16 mx-auto">
    <img src="{{ asset('assets/img/coding.jpg') }}" class="min-w-full min-h-full mx-auto" alt="">


    <div class="space-y-5 lg:text-left ml-10 text-center">
        <h1 class="font-bold pt-10 text-3xl text-slate-800 uppercase font-calistoga">nama produk</h1>
        <p class="leading-10 lg:text-sm text-slate-800 indent-8 text-justify space-x-5 mr-5 mt-5 font-calistoga">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias consequatur fuga quisquam quas eos quaerat iusto odio vitae quia cumque, dignissimos, rerum similique repellendus modi, ea iure accusamus. Maiores dicta sunt assumenda vel, modi consequuntur sapiente ullam ducimus voluptatibus non minima harum sint, officia quam rerum, iure temporibus voluptatem voluptatum omnis fugit dolore! Molestias obcaecati deserunt iure aliquam accusamus facilis quasi fugit fugiat, iste optio, doloremque reiciendis eum esse amet veritatis cupiditate corporis inventore nam expedita omnis magnam voluptates, sequi est debitis. Veniam ea molestiae culpa asperiores molestias corporis, nemo ducimus unde provident corrupti rem doloribus dolore excepturi maxime ratione quis, ipsum veritatis suscipit a eligendi reiciendis. Error tempora nostrum excepturi in, consequatur similique, nihil sunt mollitia numquam vitae magni eligendi commodi architecto odit reiciendis optio? Dolor, rerum inventore veritatis deleniti quidem voluptate sunt error illo suscipit hic architecto itaque doloremque deserunt voluptas. Repudiandae, vel assumenda! Ipsam, iusto dolores. Repellat suscipit pariatur aliquam consequatur minima necessitatibus? Eligendi maiores quis doloribus quibusdam odio minus sunt sequi mollitia odit, dolorem accusantium voluptates repellat, magnam eveniet aliquam tempora officiis sed aut quos perspiciatis numquam, rerum commodi qui? In dolor, explicabo nostrum deleniti recusandae quo nemo eveniet eius tenetur quia! Veritatis vel dicta enim.</p>

    </div>
</div>
<div class="columns-2 ml-12 mt-12 mb-12">
    <div class="columns-2 flex justify-between">
        <h1 class="text-black font-calistoga text-3xl">Rp 500.000</h1>
        <p class="font-bree_serif text-sm text-slate-500 text-right mr-10">Kota Cirebon</p>
    </div>
    <div class="columns-2 justify-between">
        <a href="/">
            <button class="lg:w-56 ml-7 lg:h-10 w-56 h-10 items-center justify-center flex bg-slate-200 hover:bg-blue-600 rounded-3xl capitalize text-zinc-900 hover:text-white animation-shadow font-bree_serif">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                Back to home
            </button>
        </a>
        <a href="{{ route('products.check') }}">
            <button class="lg:w-56 ml-7 lg:h-10 w-56 h-10 items-center justify-center flex bg-slate-200 hover:bg-blue-600 rounded-3xl capitalize text-zinc-900 hover:text-white animation-shadow font-bree_serif">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                </svg>
                Book now
            </button>
        </a>
    </div>
</div>
@endsection