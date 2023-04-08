@extends('main')

@section('contents')
    <header id="" class=" text-center lg:text-left pb-10">


        <div class="">

            <img class="w-screen   object-cover" src="images/propertibanner.png">



        </div>






    </header> <!-- end of header -->




    <section id="strength" class="bg-gradient-to-r from-white to-gray-200 py-10">
        <div class="mx-4 relative flex pb-1 pt-12 items-center">
            <span class="flex-shrink mx-4 text-black font-bold text-6xl">Find Your Comfort</span>
            <span class="  items-end h-0.5 flex-grow bg-black lg:w-1/3"></span>
        </div>
        <span class="mx-8 text-black font-bold text-6xl">House</span>
        <hr class="w-full h-0.5 border-0 rounded bg-black my-10">


    </section>

    <section class=" bg-gray-100 rounded-lg shadow-xl my-4 lg:mx-4">
        <div class="lg:grid lg:grid-cols-2 lg:gap-4 sm:flex md:flex-row sm:mx-auto  container py-6">


            <div class="col-span-1">
                <h1 class=" text-2xl font-light">Our Value</h1>
                <h5 class="font-black text-6xl  pb-10">Value We Give <br>to You</h5>
                <div class="border-2 border-black rounded-full my-2">
                    <h5 class="text-black pt-4 pb-2 px-32">Find Your Comfort House</h5>
                    <p class="text-black pb-2 font-light px-32">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Commodi porro corporis aperiam amet dolor obcaecati autem magnam qui, minus delectus.</p>
                </div>
                <div class="border-2 border-black rounded-full my-2">
                    <h5 class="text-black pt-4 pb-2 px-32">Find Your Comfort House</h5>

                </div>
                <div class="border-2 border-black rounded-full my-2">
                    <h5 class="text-black pt-4 pb-2 px-32">Find Your Comfort House</h5>

                </div>
                <div class="border-2 border-black rounded-full my-2">
                    <h5 class="text-black pt-4 pb-2 px-32">Find Your Comfort House</h5>

                </div>
                <div class="border-2 border-black rounded-full my-2">
                    <h5 class="text-black pt-4 pb-2 px-32">Find Your Comfort House</h5>

                </div>

            </div>

            <div class="col-span-1">
                <img class="w-screen rounded-3xl border-black border-2 object-cover" src="images/ip1.png">


            </div>




        </div>

    </section>


    <section class="">


        <div class="">

            <div class="grid grid-cols-1 md:grid-cols-5 gap-4 p-20 ">
                @foreach ($articles as $item)
                    <div class="relative overflow-hidden rounded-lg shadow-lg cursor-pointer">

                        <img class="object-cover w-full h-48 mx-auto pt-4" src="{{ asset('/storage/' . $item->image) }}"
                            alt="Sunset in the mountains">

                        <div class="absolute top-16 left-0 px-6 py-4">
                            <div class="text-xl tracking-tight text-black font-bold">{{ $item->title }}</div>
                            <p class="leading-normal text-black font-thin">
                                {{ $item->excerpt }}
                            </p>
                        </div>


                    </div>

                    {{-- @endforeach --}}
                @endforeach

            </div>
        </div>
    </section>
    <section class="  my-8">
        <h1 class="align-middle text-center text-black font-semibold text-5xl py-10 ">LATEST PROMO</h1>

        <div class="lg:grid lg:grid-cols-2 md:flex md:flex-row md:mx-auto container px-1 sm:px-8 ">

            <div class="col-span-1">

                <img src="/images/Rectangle6.png" class="w-full h-full">

            </div>

            <div class="col-span-1">

                <img src="/images/Rectangle6.png" class="w-full h-full">

            </div>

        </div>
        <h5 class=" text-center text-black font-thin text-xl py-10 ">ONLY ON</h5>
        <h5 class=" text-center text-black font-bold text-2xl py-10 ">DOWNLOAD NOW</h5>
        <div class="inline-flex items-center flex-wrap justify-center w-full gap-4">
            <img class="" src="images/playstoreitam.png">
            <img class="" src="images/appstoreitam.png">
        </div>

    </section>
    <section class="">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-20">

            <div class="col-span-1">
                <h5 class=" text-black font-bold text-3xl py-4 ">MEET <br> OUR TEAM</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat quasi ullam minima delectus laudantium
                    voluptate nemo molestias nihil, enim, nostrum quae aspernatur id sequi eos eius aperiam dignissimos
                    aliquam sit.</p>
            </div>
            <div class="col-span-2">
                <div class="splide">
                    <div class="splide__arrows">
                        <button class="bg-gray-900 shadow splide__arrow splide__arrow--prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </button>
                        <button class="bg-gray-900 shadow splide__arrow splide__arrow--next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="splide__track  mb-10">
                        <div class="splide__list gap-x-4 mb-10">
                            <div class="leading-1 w-full rounded-xl shadow splide__slide 2xl:h-96 mb-10 max-w-sm">
                                <img src="/images/Rectangle6.png" class="h-64 object-cover w-fit rounded-t-xl">
                                <div class="p-4">

                                    <p class="text-black text-2xl font-semibold ">
                                        Lunnizom
                                    </p>
                                    <p class="text-black text-2xl font-light ">
                                        Foundation
                                    </p>
                                    <div class="inline-flex align-midle place-items-center gap-2">

                                        <img src="/images/instagramitam.png" class="h-6">
                                        <p class="text-black text-2xl font-light ">
                                            asasasa
                                        </p>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="my-8 bg-gray-100">

        <h5 class="text-center text-black font-bold text-4xl py-4 ">WHAT PEOPLE SAID <br> ABOUT US</h5>
        <p class="text-center font-light text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Doloribus
            adipisci quas impedit officiis vero dolorum quasi nostrum voluptatibus quos quisquam!</p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-20 ">
            @foreach ($articles as $item)
                <div class="max-w-sm overflow-hidden shadow-lg bg-white rounded-xl">

                    <img class="w-full h-64 object-cover mx-auto pt-4" src="{{ asset('/storage/' . $item->image) }}"
                        alt="Sunset in the mountains">


                </div>
                {{-- @endforeach --}}
            @endforeach
        </div>
    </section>
    <section class="my-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-20">
            <div class="col-span-2">
                <img src="/images/barbemap.png" class="h-96">
            </div>

            <div class="col-span-1">
                <h5 class="text-left text-black font-bold text-4xl py-4 lg:pt-28">HOW TO GET<br>HERE</h5>
                <p class="text-left font-light text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Doloribus
                    adipisci quas impedit officiis vero dolorum quasi nostrum voluptatibus quos quisquam!</p>
            </div>
        </div>
    </section>
    <section id="partner">
        <div class="pt-20">
            <h4 class="text-center pb-16 text-black text-4xl font-bold">OUR PARTNER</h4>
            <div class="flex justify-center gap-24 mx-auto mb-40">
                @foreach ($tools as $item)
                    <img class="h-16" src="{{ asset('storage/' . $item->image) }}" alt="Lunnizoom Partner" />
                @endforeach

            </div>

        </div>
    </section>
    <section id="footer">
        <div class=" bg-zinc-800">
            @foreach ($contacts as $item)
                <div
                    class="lg:grid lg:grid-cols-2 lg:gap-24 md:flex md:flex-row md:mx-auto px-1 sm:px-8 lg:gap-x-16 pt-28">
                    <div class="col-span-1 m-auto">
                        <h5 class="text-white">Contact Us</h5>

                        <p class="text-white md:mr-32">FORMING AN ECOSYSTEM WITHIN A BUSINESS THAT PROVIDES MUTUAL BENEFITS
                            AND SYNERGIES WITH OTHER BUSSINESES,
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

            <h4 class="text-center font-light text-xl mx-4 text-white">All Right Reserved | Lunnizom Group 2023 | Made
                by Eloui</h4>
            <span class=" h-0.5 flex-grow bg-white lg:w-1/3"></span>
        </div>
        </div>

    </section>
    <style>
        .platform {
            position: relative;
            transition: right 0.3s;
        }

        .body {
            background-color: white !important;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.2/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            type: 'loop',
            autoplay: true,
        });

        splide.mount();
    </script>
    {{-- <script>
        function gallery() {
            this.index = 0;
            this.load = function() {
                this.rootEl = document.querySelector(".gallery");
                this.platform = this.rootEl.querySelector(".platform");
                this.frames = this.platform.querySelectorAll(".each-frame");
                this.contentArea = this.rootEl.querySelector(".content-area");
                this.width = parseInt(this.rootEl.style.width);
                this.limit = {
                    start: 0,
                    end: this.frames.length - 1
                };
                this.frames.forEach(each => {
                    each.style.width = this.width + "px";
                });
                this.goto(this.index);
            }
            this.set_title = function() {
                this.rootEl.querySelector(".heading").innerText = this.frames[this.index].getAttribute("title");
            }
            this.next = function() {
                this.platform.style.right = this.width * ++this.index + "px";
                this.set_title();
            }
            this.prev = function() {
                this.platform.style.right = this.width * --this.index + "px";
                this.set_title();
            }
            this.goto = function(index) {
                this.platform.style.right = this.width * index + "px";
                this.index = index;
                this.set_title();
            }
            this.load();
        }
        var G = new gallery();
        G.rootEl.addEventListener("click", function(t) {
            var val = t.target.getAttribute("action");
            if (val == "next" && G.index != G.limit.end) {
                G.next();
            }
            if (val == "prev" && G.index != G.limit.start) {
                G.prev();
            }
            if (val == "goto") {
                let rv = t.target.getAttribute("goto");
                rv = rv == "end" ? G.limit.end : rv;
                G.goto(parseInt(rv));
            }
        });
        document.addEventListener("keyup", function(t) {
            var val = t.keyCode;
            if (val == 39 && G.index != G.limit.end) {
                G.next();
            }
            if (val == 37 && G.index != G.limit.start) {
                G.prev();
            }
        });

        // run G.load() if new data loaded with ajax
    </script> --}}
@endsection
