@extends('user.masteruser')
@section('content')
<div class="m-3 text-center">
    <h1 class=" lg:mt-32 mt-7  lg:text-5xl text-2xl text-gray-800 font-extrabold  font-bree_serif">Usahamu Menjadi Lebih Efisien Dengan<br></h1>
    <h1 class=" lg:mt-5 mt-2 lg:text-5xl text-gray-800 text-2xl font-extrabold font-bree_serif">Bergabung di E-commerce Kami</h1>
    <p class="text-center lg:mt-16 mt-5 antialiased font-bree_serif text-sm lg:text-lg">
        Perluas jaringan bisnis anda di e-commerce kami secara real time<br>
        Dan dapatkan keuntungan lebih untuk anda dan bisnis anda
    </p>
</div>
<div class="lg:mt-24 mt-7">
    <img src="{{ asset('assets/img/brands.png') }}" class="lg:w-3/4 w-4/5 mx-auto" alt="">
</div>
<div class="banner">
    <div class="row">
        <div class="lg:columns-2 mt-12 lg:mt-56">
            <div>
                <img src="{{ asset('assets/img/step1.png') }}" class="lg:w-1/2 lg:ml-56 w-56 mx-auto lg:mx-0 lg:-mt-24 lg:visible visible" alt="">
            </div>

            <div class="space-y-5 lg:text-left text-center">
                <h2 class="uppercase text-green-600 text-xl font-calistoga">better career</h2>
                <h1 class="font-bold mt-10 text-3xl font-bree_serif">Prepare The Journey</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Learn from anyone around <br>world and get new skills</p>
                <button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Learn More</button>
            </div>
        </div>
        <div class="lg:columns-2 mt-12 lg:mt-36">
            <div>
                <img src="{{ asset('assets/img/step2.png') }}" class="lg:w-1/2 w-56 mx-auto lg:mx-0 lg:-mt-36 lg:hidden visible" alt="">
            </div>
            <div class="space-y-5 lg:text-left lg:ml-56 lg:mt-24 text-center">
                <h2 class="uppercase text-green-600 text-xl font-calistoga">better career</h2>
                <h1 class="font-bold mt-10 text-3xl font-bree_serif">Prepare The Journey</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Learn from anyone around <br>world and get new skills</p>
                <button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Learn More</button>
            </div>

            <div>
                <img src="{{ asset('assets/img/step2.png') }}" class="lg:w-1/2 w-56 mx-auto lg:mx-0 lg:-mt-36 lg:visible invisible" alt="">
            </div>
        </div>
        <div class="lg:columns-2 -mt-56 lg:mt-56">
            <div>
                <img src="{{ asset('assets/img/step3.png') }}" class="lg:w-1/2 lg:ml-56 w-56 mx-auto lg:mx-0 lg:-mt-24" alt="">
            </div>

            <div class="space-y-5 lg:text-left sm:text-center">
                <h2 class="uppercase text-green-600 text-xl font-calistoga">better career</h2>
                <h1 class="font-bold mt-10 text-3xl font-bree_serif">Prepare The Journey</h1>
                <p class="lg:text-xl mt-5 font-calistoga">Learn from anyone around <br>world and get new skills</p>
                <button class="lg:w-52 lg:h-10 w-56 h-10 bg-slate-200 hover:bg-blue-600 rounded-3xl mt-5 text-zinc-900 hover:text-white animation-shadow font-bree_serif">Learn More</button>
            </div>
        </div>
    </div>
</div>

<div class="mt-52">
    <div id="about" class="bg-white border-b-2 hover:shadow-2xl w-4/5 h-80 rounded-2xl mx-auto pt-1">
        <h2 class="text-center font-bree_serif text-5xl font-bold -mt-7 text-slate-500">About</h2>
        <p class=" indent-8 font-bree_serif text-justify mt-7 ml-24 mr-24">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia esse fugiat nesciunt consequuntur maxime culpa rem optio eveniet, suscipit quis dolorem, commodi ratione error tenetur, eaque omnis voluptas mollitia voluptatibus sapiente soluta. Nostrum quisquam adipisci quae earum laboriosam. Quisquam officia, quo dolorum soluta impedit reprehenderit nihil sed tempore aperiam ex illo explicabo aut dolore error. Nulla in magni iusto ipsa adipisci tempora iste eligendi saepe voluptate. Neque corrupti dignissimos cumque possimus harum iste voluptate adipisci minima odio explicabo sapiente soluta beatae, accusamus, consequuntur error veniam reiciendis laborum impedit ipsam debitis, officiis itaque ea? Necessitatibus, reiciendis. Aspernatur delectus reiciendis commodi excepturi.</p>
        <h2 class="text-center font-passion_one text-xl mt-5">- Pasar Global -</h2>
    </div>
</div>

<div id="customor-service">
    <img src="{{ asset('assets/img/banner.png') }}" class="w-1/4 mx-auto lg:-mb-10 mt-48" alt="">
    <div class="mx-auto lg:w-4/5 lg:h-56 text-center mb-12 rounded-3xl">
        <h1 class="font-bold text-3xl pt-12 mx-auto mt-5 capitalize font-bree_serif">Silahkan hubungi customor service kami</h1>
        <p class="font-semibold text-xl mt-2 text-slate-500 font-bree_serif">Jam kerja Senin - Jum'at Pukul 08.00 - 17.00 (wib)</p>
        <button class="w-56 h-10 bg-slate-600 rounded-3xl text-white mb-10 mt-7 hover:bg-blue-600 font-bree_serif antialiased"><a href="https://wa.me/+62">+6212345678910</a></button>
    </div>
</div>

@endsection