@extends('mainBlank')

@section('contents')
    <!-- Header Section Start -->
    <header class="bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container mt-2 lg:px-10">
            <div class="flex items-center justify-self-bottom relative">
                <div class="mb-2 sm:mb-0 flex flex-row">
                    <div class="h-10 self-center mx-4">
                        <img class="h-10 self-center" src="/images/kepul/logo.png" />
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
                                <a href="#" class="text-black py-2 mx-8 group-hover:text-fourth1  text-md">Kontak
                                    kami</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-black py-2 mx-8 group-hover:text-fourth1  text-md">Tentang
                                    kami</a>
                            </li>
                            <li class="group">
                                <a href="#" class="text-black py-2 mx-8 group-hover:text-fourth1  text-md">Lokasi</a>
                            </li>
                            </li>
                            <li class="group">
                                <a href="#" class="text-black py-2 mx-8 group-hover:text-fourth1  text-md">Pengaduan
                                    layanan</a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="text-black py-2 mx-8 group-hover:text-fourth1 font-bold  text-kepul-primary">
                                    Download
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    {{-- Section 1 --}}
    <section class="mt-20 px-4 lg:px-20">
        <div class="flex items-center">
            {{-- LEFT --}}
            <div class="lg:basis-1/2 ">
                <div>
                    <p class="font-bold text-4xl lg:text-6xl">
                        Ubah sampah jadi berkah hanya di <span class="text-kepul-primary"> Kepul</span>
                    </p>

                    <p class="mt-2">
                        Aplikasi penjual sampah daur ulang nomor 1 di kota Medan
                    </p>
                </div>
                <div class="flex flex-row mt-5">
                    <div class="h-10">
                        <img class="h-[60px] lg:h-[80px]" src="/images/kepul/google-play.png" />
                    </div>
                    <div class="h-10">
                        <img class=" h-[60px] lg:h-[80px] px-2 lg:px-5" src="/images/kepul/app-store.png" />
                    </div>
                </div>
                <div class="mt-[90px] lg:mt-[150px]">
                    <img class="h-[70px] mx-5" src="/images/kepul/followers.png" />
                </div>
            </div>
            {{-- RIGHT --}}

            <div class="hidden basis-1/2 lg:block">
                <div class="flex justify-center ">
                    <img class=" mx-5 max-h-[700px] justify-self-end" src="/images/kepul/mockup.png" />
                </div>
            </div>

        </div>
    </section>

    {{-- Section 2 --}}
    <section class="mt-10 px-4 lg:px-20">
        <div class="flex items-center">
            {{-- LEFT --}}
            <div class="hidden basis-1/2 lg:block">
                <div class="flex justify-center ">
                    <img class=" mx-5 max-h-[700px] justify-self-end" src="/images/kepul/sampah-logam.png" />
                </div>
            </div>
            {{-- RIGHT --}}
            <div class="lg:basis-1/2 lg:mr-20">
                <div>
                    <p class="font-medium text-3xl lg:text-6xl">
                        Barang bekas menumpuk? <span class="text-kepul-primary"> Kepul</span>-in aja
                    </p>

                    <p class="mt-10">
                        Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang.
                        Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang
                        bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada
                        pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60
                        jenis sampah sampah organik dan non-organik.
                    </p>

                    <div class="mt-[50px]">
                        <a
                            class="bg-transparent hover:bg-kepul-primary text-kepul-primary font-semibold hover:text-white py-2 px-4 border-2 border-kepul-primary hover:border-transparent rounded">
                            Try for free
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="mt-10 mb-10 px-4 lg:px-20">
        <div class="flex items-center">
            {{-- LEFT --}}
            <div class="lg:basis-1/2 lg:mr-20">
                <div>
                    <p class="font-medium text-4xl lg:text-6xl">
                        Kenapa harus <span class="text-kepul-primary"> Kepul?</span>
                    </p>

                    <p class="mt-10">
                        Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang.
                        Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang
                        bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada
                        pengepul besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60
                        jenis sampah sampah organik dan non-organik.
                    </p>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="hidden lg:block">
                <div class="flex justify-end ">
                    <img class=" mx-5 max-h-[600px] justify-self-end" src="/images/kepul/calendar.png" />
                </div>
            </div>
        </div>
    </section>

    {{-- Section 4 --}}
    <div class="flex items-center bg-no-repeat bg-cover bg-center lg:h-[1050px]"
        style="background-image: url('/images/kepul/bg-phone.png');">
        <div class="lg:mt-20  p-2 lg:p-20 lg:mx-[100px]">
            <div class="lg:mr-20">
                <div>
                    <p class="font-medium text-4xl lg:text-6xl text-center">
                        Program <br> <span class="text-kepul-primary"> Kepul?</span>
                    </p>

                    <p class="mt-10 lg:px-10 lg:px-20 text-center">
                        Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang.
                        Aplikasi ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang
                        bermata pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada
                        pengepul
                        besar, ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis
                        sampah
                        sampah organik dan non-organik.
                    </p>

                    <div class="mt-20 grid grid-cols-2 lg:grid-cols-4 gap-4">
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/Hands.png" />
                            </div>
                            <p class="mt-10">
                                Pionir di kota Medan
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/graduation-hat.png" />
                            </div>
                            <p class="mt-10">
                                Semua driver berasal dari pengepul sampah
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/Mosque.png" />
                            </div>
                            <p class="mt-10">
                                Menjual lebih dari 30 jenis sampah organik & unorganik
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/Electricity.png" />
                            </div>
                            <p class="mt-10">
                                Menjual lebih dari 30 jenis sampah organik & unorganik
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/Teamwork.png" />
                            </div>
                            <p class="mt-10">
                                Gratis penjemputan sampah
                            </p>
                        </div>
                        <div
                            class="flex flex-col items-center bg-gradient-to-b from-gray-100 to-white p-8 rounded text-center">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[80px]" src="/images/kepul/Rice.png" />
                            </div>
                            <p class="mt-10">
                                Jual sampah mudah & cepat
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Section 5 --}}
    <section class="mt-10 mb-10 px-4 lg:p-20 ">

        <div class="p-5 lg:p-20 bg-gradient-to-b from-kepul-primary to-kepul-primary lg:to-white rounded-lg">
            <div class="flex flex-col items-center align-center">
                <p class="text-white font-medium text-4xl lg:text-5xl">Try for free</p>

                <p class="mt-10 px-10 text-white text-center">
                    Kepul merupakan sebuah inovasi dalam upaya optimalisasi jual beli sampah yang dapat didaur ulang. Aplikasi
                    ini digunakan oleh masyarakat yang ingin menjual sampah kepada para pengepul, mereka yang bermata
                    pencaharian dengan membeli sampah dari masyarakat untuk kemudian dijual kembali kepada pengepul besar,
                    ataupun pabrik daur ulang sampah. Di kepul, masyarakat bisa menjual lebih dari 60 jenis sampah sampah
                    organik dan non-organik.
                </p>
    
                <div class="mt-[50px] aligns-center">
                    <a
                        class="bg-transparent hover:bg-white text-white font-semibold hover:text-kepul-primary py-2 px-4 border-2 border-white hover:border-transparent rounded-lg">
                        Try for free
                    </a>
                </div>

            </div>

            <div class="flex  hidden lg:block">
                <img class="max-h-[700px] justify-self-end" src="/images/kepul/try-free.png" />
            </div>
        </div>



    </section>


    <section id="footer">
        <div class="bg-kepul-primary pt-10">
            @foreach ($contacts as $item)
                <div class="lg:grid lg:grid-cols-2 lg:gap-24 md:flex md:flex-row md:mx-auto px-1 sm:px-8 lg:gap-x-16">
                    <div class="col-span-1 m-auto">
                        <h5 class="text-white">Contact Us</h5>
                        <p class="text-white md:mr-32">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere
                            quia
                            necessitatibus
                            ipsum aspernatur non itaque voluptate vitae perspiciatis rem adipisci!
                        </p>

                        <div class="flex items-center mt-10 text-white gap-8">
                            <a href="{{ $item->instagram }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
                   ">
                                <svg role="img" viewBox="0 0 24 24" class="fill-white"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Instagram</title>
                                    <path
                                        d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                                </svg>
                            </a>

                            <a href="{{ $item->tiktok }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
              ">
                                <svg role="img" class="fill-white" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>TikTok</title>
                                    <path
                                        d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z" />
                                </svg>
                            </a>
                            <a href="{{ $item->twitter }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
                   ">
                                <svg role="img" class="fill-white" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>Twitter</title>
                                    <path
                                        d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                </svg>
                            </a>
                            <a href="{{ $item->linkedin }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
              ">
                                <svg role="img" viewBox="0 0 24 24" class="fill-white"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>LinkedIn</title>
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                            </a>
                            <a href="{{ $item->email }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
                   ">
                                <svg xmlns="http://www.w3.org/2000/svg" class="" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>

                            </a>
                            <a href="{{ $item->youtube }}" target="_blank"
                                class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
                   ">
                                <svg role="img" viewBox="0 0 24 24" class="fill-white"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <title>YouTube</title>
                                    <path
                                        d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                                </svg>
                            </a>
                        </div>
            @endforeach

        </div>
        <div class="col-span-1 m-auto">
            <div class="lg:grid lg:grid-cols-2 lg:gap-24 md:flex md:flex-row md:mx-auto px-1 sm:px-8 lg:gap-x-16">
                <div class="col-span-1">
                    <h5 class="text-white">Youtube Channel</h5>
                    <img src="/images/yt.png" alt="">
                </div>
                <div class="col-span-1">
                    <h5 class="text-white">More Photos</h5>
                    <img src="/images/Capture.png" alt="">

                </div>
            </div>
        </div>

        </div>
        <div class=" relative flex pb-5 items-center pt-16">
            <span class=" h-0.5  flex-grow bg-white lg:w-1/3"></span>

            <h4 class="text-center font-light text-sm mx-4 text-white">All Right Reserved | Lunnizom Group 2023 | Made
                by Eloui</h4>
            <span class=" h-0.5 flex-grow bg-white lg:w-1/3"></span>
        </div>
        </div>

    </section>

    <style>
        .body {
            background-color: white !important;
        }
    </style>
@endsection
