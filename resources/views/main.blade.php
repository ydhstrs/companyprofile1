<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>{{ config('app.name', 'By.Afita') }}</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/css/splide.min.css">
    <link href="https://fonts.googleapis.com/css?family=Amiri:400,700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="mb-2 sm:mb-0 flex flex-row
  ">
                    <div class="h-10 self-center mx-4">
                        <img class="h-10 self-center" src="/images/logo.png" />
                    </div>

                </div>


                <div class="flex items-center ">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-6 lg:hidden">
                        <span class="hamburger-line transition duration-500 ease-in-out origin-bottom-left"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out"></span>
                        <span class="hamburger-line transition duration-500 ease-in-out origin-top-left "></span>
                    </button>
                    <nav id="nav-menu"
                        class="hidden absolute py-5 shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="text-white py-2 mx-8 group-hover:text-fourth1  text-lg">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#section4"
                                    class="text-white py-2 mx-8 group-hover:text-fourth1  text-lg">Aktivitas Terbaru</a>
                            </li>
                            <li class="group">
                                <a href="#section5"
                                    class="text-white py-2 mx-8 group-hover:text-fourth1  text-lg">Partner</a>
                            </li>
                            <li class="group">
                                <a href="#footer"
                                    class="text-white py-2 mx-8 group-hover:text-fourth1  text-lg">Kontak</a>
                            </li>
                            {{-- <li class="group">
                                <a href="#"
                                    class="text-base text-black py-2 mx-8 group-hover:text-fourth1">Contact</a>
                            </li> --}}


                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="">
        @yield('contents')
    </div>



    {{-- @vite('resources/js/script.js') --}}

</body>



<script>
    //Scrip Untuk Navbar
    //hamburger
    const hamburger = document.querySelector("#hamburger");
    const navMenu = document.querySelector("#nav-menu");

    hamburger.addEventListener("click", function() {
        hamburger.classList.toggle("hamburger-active");
        navMenu.classList.toggle("hidden");
    });
</script>

<script>
    //Scrip Untuk Navbar
    //navbar fixed
    window.onscroll = function() {
        const header = document.querySelector("header");
        const navfix = header.offsetTop;

        if (window.pageYOffset > navfix) {
            header.classList.add("navbar-fixed");
        } else {
            header.classList.remove("navbar-fixed");
        }
    };
</script>


</html>
