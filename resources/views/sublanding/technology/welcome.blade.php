@extends('mainBlank')

@section('contents')
    <div class="lg:p-10">

        {{-- Section 1 --}}
        <div class="flex flex-col lg:flex-row gap-6">

            {{-- Card Left --}}
            <div class="lg:basis-1/2 border-4 border-white rounded-2xl bg-no-repeat bg-cover bg-center shadow lg:min-h-[550px]"
                style="background-image: url('/images/technology/bg-orange.png');">

                <div class="flex flex-col justify-between">
                    <div class="p-20 text-white font-medium text-6xl">
                        <p>LITE</p>
                        <p>Capabilities Deck</p>
                    </div>

                    <div class="mt-[120px] p-10">
                        <div class="flex flex-row justify-between items-end">

                            <div class="bg-white px-[20px] py-[40px] rounded-full">
                                <div class="flex justify-center">
                                    <img class=" mx-5 max-h-[50px]" src="/images/technology/arrow.png" />
                                </div>
                            </div>

                            <div class="text-white text-2xl">
                                <p class="">Its about creating</p>
                                <p class="">something bigger than yourself</p>
                                <p class="">than yourself</p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            {{-- Card Center --}}
            <div class="lg:basis-1/4 border-4 border-white rounded-2xl bg-no-repeat bg-cover bg-center shadow "
                style="background-image: url('/images/technology/bg-pink.png');">
                <div class="flex flex-col justify-between h-full content-bottom">
                    <div class="min-h-[300px]">
                    </div>
                    <div class="bg-tech-primary rounded-2xl p-5 ">
                        <div class="flex flex-col items-start">
                            <div class="flex justify-center">
                                <img class="max-h-[50px]" src="/images/technology/button.png" />
                            </div>

                            <div class="mt-10">
                                <p class="text-3xl">
                                    We help our client to shine online
                                </p>
                                <div class="flex gap-2 items-end">

                                    <p class="text-sm mt-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis accusamus
                                        doloribus
                                        aliquam temporibus aspernatur itaque recusandae ex! Voluptatem fugiat ipsam cum,
                                        fuga
                                        quibusdam est nam distinctio, vitae aliquam nostrum et.
                                    </p>
                                    <div class="bg-white px-[6px] py-[12px] rounded-full h-min">
                                        <div class="flex justify-center">
                                            <img class=" mx-5 max-h-[25px]" src="/images/technology/arrow.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Card Right --}}
            <div class="min-h-[500px] px-10 py-5 basis-1/2 lg:basis-1/4 border-4 border-white rounded-2xl bg-no-repeat bg-cover bg-center shadow "
                style="background-image: url('/images/technology/bg-blue.png');">

                <div class="flex items-end h-full gap-4 justify-between">
                    <p class="text-white text-4xl" style="writing-mode: vertical-rl;text-orientation: mixed;">
                        We <br>Create design <br>To inspire
                    </p>
                    <div class="flex flex-col items-center gap-4">
                        <div class="px-5" style="writing-mode: vertical-rl;text-orientation: mixed;">
                            <a
                                class="bg-transparent hover:bg-white text-white font-semibold hover:text-tech-primary py-2 px-4 border-2 border-white hover:border-transparent rounded">
                                More about us
                            </a>
                        </div>
                        <div class="bg-white max-w-[50px] px-[6px] py-[12px] rounded-full h-min">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[25px]" src="/images/technology/arrow.png" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <br>
        {{-- Section 2 --}}

        <div class="flex flex-col lg:flex-row gap-6">
            {{-- Left --}}
            <div class="flex-1 px-10 pt-10 border-4 border-white bg-tech-primary rounded-2xl ">
                <div class="flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div class="px-5">
                            <a
                                class="bg-transparent hover:bg-black text-black font-semibold hover:text-tech-primary py-2 px-4 border-2 border-black hover:border-transparent rounded-lg">
                                More about us
                            </a>
                        </div>
                        <div class="bg-white max-w-[50px] px-[6px] py-[12px] rounded-full h-min">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[25px]" src="/images/technology/arrow.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between mt-[80px]">
                    <div class="flex justify-between items-center">
                        <div class="px-5">
                            <p class="text-xl">
                                People following
                            </p>
                            <p class="text-xl">
                                us on Social Media
                            </p>
                            <p class="text-xl">
                                and be one of ‘em
                            </p>
                        </div>
                        <div class="text-end aligns-end">
                            <p class="font-extrabold text-[80px]">
                                +1<span class="text-[111px]">k</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Center --}}
            <div class="flex-1 px-10 pt-10 border-xl border-white rounded-2xl bg-no-repeat bg-cover bg-center shadow"
                style="background-image: url('/images/technology/bg-dark-blue.png');">
                <div class="flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div class="px-5">
                            <a
                                class="bg-transparent hover:bg-white text-white font-semibold hover:text-black py-2 px-4 border-2 border-white hover:border-transparent rounded-lg">
                                More about us
                            </a>
                        </div>
                        <div class="bg-white max-w-[50px] px-[6px] py-[12px] rounded-full h-min">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[25px]" src="/images/technology/arrow.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between mt-[80px]">
                    <div class="flex justify-between items-center text-white">
                        <div class="px-5">
                            <p class="text-xl">
                                We have over 30 clients
                            </p>
                        </div>
                        <div class="text-end aligns-end">
                            <p class="font-extrabold text-[80px]">
                                +30<span class="text-[111px]">k</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right --}}
            <div class="flex-1 px-10 pt-10 border-4 border-white bg-tech-primary rounded-2xl ">
                <div class="flex flex-col justify-between">
                    <div class="flex justify-between">
                        <div class="px-5">
                            <a
                                class="bg-transparent hover:bg-black text-black font-semibold hover:text-tech-primary py-2 px-4 border-2 border-black hover:border-transparent rounded-lg">
                                More about us
                            </a>
                        </div>
                        <div class="bg-white max-w-[50px] px-[6px] py-[12px] rounded-full h-min">
                            <div class="flex justify-center">
                                <img class=" mx-5 max-h-[25px]" src="/images/technology/arrow.png" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between mt-[80px]">
                    <div class="flex justify-between items-center">
                        <div class="px-5">
                            <p class="text-xl">
                                People following us on Social Media and be one of ‘em
                            </p>
                        </div>
                        <div class="text-end aligns-end">
                            <p class="font-extrabold text-[80px]">
                                +1<span class="text-[111px]">k</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <style>
        .body {
            background-color: #F4F4F4 !important;
        }
    </style>
@endsection
