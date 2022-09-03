<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between">
            <div class="flex space-x-10">
                <!-- Website Logo -->
                <a href="/" class="flex items-center lg:m-2 my-1">
                    <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="w-16 max-h-20 ml-4 lg:w-16 mr-2">
                </a>
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="py-6 px-5 text-gray-500 hover:border-b-4 border-blue-600 font-semibold hover:text-blue-600 subpixel-antialiased font-bree_serif">Home</a>
                    <a href="{{ route('products.index') }}" class="py-6 px-5 text-gray-500 hover:border-b-4 border-blue-600 font-semibold hover:text-blue-600 subpixel-antialiased font-bree_serif">Market place</a>
                    <a href="{{ route('selling.index') }}" class="py-6 px-5 text-gray-500 hover:border-b-4 border-blue-600 font-semibold hover:text-blue-600 subpixel-antialiased font-bree_serif">Start selling</a>
                </div>
            </div>
            <li class="flex-row lg:flex-row justify-center hidden md:flex items-center space-x-3">
                <a href="{{ route('signin.index') }}" class="lg:w-32 w-36 h-10 text-center rounded-r-3xl rounded-l-3xl md:w-96  py-2 px-4 lg:py-2 text-slate-600 hover:text-white font-bold bg-slate-300 m-3 hover:shadow-lg hover:transition-shadow font-bree_serif">Sign in</a>
                <a href="{{ route('regis.index') }}" class="lg:w-32 w-36 h-10 text-center rounded-r-3xl rounded-l-3xl md:w-96 py-2 px-4 lg:py-2 text-white font-bold bg-blue-500 hover:bg-blue-800 font-bree_serif">Sign up</a>
            </li>

            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center mr-3 lg:mr-0">
                <button class="outline-none mobile-menu-button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
            <!-- Secondary Navbar items -->
        </div>
    </div>
    <!-- mobile menu -->
    <div class="relative">
        <div class="hidden mobile-menu pb-1" id="navlinks fixed top-0 left-0 right-0">
            <ul class="m-3">
                <li><a href="/" class="font-bree_serif block text-sm px-2 py-4 text-whithe font-semibold subpixel-antialiased animation">Home</a></li>
                <li><a href="{{ route('products.index') }}" class="font-bree_serif block text-sm px-2 py-4 text-whithe font-semibold subpixel-antialiased animation">Market place</a></li>
                <li><a href="{{ route('selling.index') }}" class="font-bree_serif block text-sm px-2 py-4 text-whithe font-semibold subpixel-antialiased animation">Start selling</a></li>
                <div class="items-center m-7">
                    @if(isset(Auth::user()->role))

                    @else

                    <li><a href="{{ route('signin.index') }}" class="w-64 h-10 text-center block rounded-r-3xl rounded-l-3xl  py-2 px-4 text-slate-600 font-bold bg-slate-300 lg:m-3 m-2 hover:shadow-lg  mx-auto font-bree_serif">Sign in</a></li>
                    <li><a href="{{ route('regis.index') }}" class="w-64 h-10 text-center block rounded-r-3xl rounded-l-3xl  py-2 px-6 text-white font-bold bg-blue-700 lg:m-3 m-2 hover:bg-blue-900  mx-auto font-bree_serif">Sign up</a></li>

                    @endif
                </div>
            </ul>
        </div>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });

        // btn.addEventListener("click", function(){
        //     if(menu.classList.contains("hidden")){
        //         menu.classList.remove("hidden");
        //     }else{
        //         menu.classList.add("hidden");
        //     }
        // });
    </script>
</nav>