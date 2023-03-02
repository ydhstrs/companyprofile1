@extends('main')

@section('contents')
    <!-- About Section End -->
    <!-- Portofolio Section Start -->
    <section id="portofolio" class="pb-16 pt-40">
        <div class="container">
            <div class="w-full px-4">
                <div class=" mb-8">
                    <h4 class="font-bold text-4xl text-primary1 mb-2 font-Akira">LATEST PROJECT</h4>

                    <div class="mb-16 ">
                        <h4 class="font-light text-xl text-grey-700 mb-2 font-Amiri">These are some of the creative and technical
                            projects I have done relating to Research and UI Design.</h4>
                    </div>

                </div>
            </div>
            <div class="w-full px-4 flex flex-wrap gap-10 justify-center lg:w-10/12 lg:mx-auto ">
                @foreach ($projects as $item)
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">

                        @if ($item->image)
                            <div class="place-items-center h-48 overflow-hidden m-4">

                                <img src="{{ asset('/storage/' . $item->image) }}" class="w-full ">
                            </div>
                        @else
                            <img class="w-full" src="https://source.unsplash.com/1200x600?forest"
                                alt="Sunset in the mountains">
                        @endif

                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2 font-Akira">{{ $item->title }}</div>
                            <p class="text-gray-700 text-sm font-Amiri">
                                {{ $item->excerpt }}
                            </p>
                        </div>
                        <div class="pt-4 pb-2 px-6">
                            <a href="/work/{{ $item->slug }}"
                                class="rounded-full px-3 py-1 text-sm font-semibold text-fourth1 mr-2 mb-2 flex place-items-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-210 duration-300">Case
                                Study <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
    </section>
    <!-- Portofolio Section End -->


    <section id="contact">

        <div class="py-16 min-w-full flex transition-all duration-500 bg-third1 pt-30 mt-32">
            <div class="container max-w-screen-lg mx-auto">
                <div class="text-center">
                    <div class="">
                        <p class="text-2xl font-bold text-black mb-4 font-Akira">
                            GET IN TOUCH WITH ME, SAY HI
                        </p>
                        @foreach ($about as $item)
                            <a target="blank" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to={{ $item->email }}"
                                class="text-2xl text-fourth1 underline underline-offset-8 font-Amiri font-semibold">
                                <ion-icon class="text-xl" name="mail-outline"></ion-icon>{{ $item->email }}
                            </a>
                        @endforeach
                    </div>

                </div>
                <hr class="my-6  sm:mx-auto text-white lg:my-8" />

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
@endsection
