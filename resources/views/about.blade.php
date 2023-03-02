@extends('main')

@section('contents')
    <header id="" class="py-28 text-center md:pt-10 lg:text-left ">
        <div class="container px-1 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">
                        <div class="xl:text-right pt-48">
                @foreach ($about as $item)
                    <img class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300"src="{{ asset('storage/' . $item->image) }}" alt="alternative" width="70%"/>
                <div class="flex items-center mt-10">
                    <h4 class="font-light text-slate-700 py-4 px-4 font-Amiri">Check Out My : </h4>
                    <a href="https://{{ $item->instagram }}" target="_blank"
                        class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
              text-slate-400 ">
                        <img class="h-10 self-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300" src="/images/instagram.png" />
                    </a>
                    <a href="https://{{ $item->linkedin }}" target="_blank"
                        class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
              text-slate-400 ">
                        <img class="h-10 self-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300" src="/images/linkedin.png" />
                    </a>
                        <a href="https://{{ $item->tiktok }}" target="_blank"
                            class="w-10 h-10 mr-3 rounded-full flex justify-center items-center
                  text-slate-400 ">
                            <img class="h-10 self-center transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-125 duration-300" src="/images/tiktok.png" />
                        </a>
                </div>
            </div>
            <div class="mb-16 lg:mt-32 xl:mt-40 xl:mr-12">
                <h1 class="text-base text-primary1 font-bold md:text-xl lg:text-4xl col-start-1 pb-4 font-Akira">
                    ABOUT ME

                </h1>
                    <p class="pre-line light text-gray-700 mb-10 font-Amiri">
                        {{ $item->isi }}
                    </p>
                <a target="blank" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to={{ $item->email}}"
                    class="text-lg font-Amiri text-white bg-fourth1 py-1 px-9 rounded-xl hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                    Email Me</a>
                    <a href="{{ asset('storage/' . $item->cv) }}" download="resume-afita" class="text-lg font-Amiri text-fourth1 underline underline-offset-4 py-3 px-9 hover:shadow-md hover:opacity-80 transition duration-500 ease-in-out">
                         Download CV
</a>

            </div>
                @endforeach



        </div> <!-- end of container -->
    </header> <!-- end of header -->
    <!-- About Section Start -->
    <section id="about" class="pt-20">
        <div class="container">
            <div class="flex justify-center">
                <div class="mb-6 w-full px-4">
            <div class="xl:text-right pt-20">
                @foreach ($cv as $item)
                    <img class=""
                        src="{{ asset('storage/' . $item->image) }}" alt="alternative" />
                @endforeach

            </div>

                </div>

            </div>

    </section>
    <!-- About Section End -->
        <div class="mb-16 pt-20">
            <h4 class="font-Akira text-4xl text-primary1 text-center mb-2">  <span class="text-xs font-thin">- - - - - - - - - - - - - - - - - - - - - -</span> TOOLS & SKILLS <span class="text-xs font-thin">- - - - - - - - - - - - - - - - - - - - - -</span></h4>
        </div>
        <div class="flex justify-center gap-4 mx-auto mb-40">
            @foreach ($tools as $item)
                               <img class="w-20 h-20"
                        src="{{ asset('storage/' . $item->image) }}" alt="afita tool" />
                        @endforeach

        </div>
  
  
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
