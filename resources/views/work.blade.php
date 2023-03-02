@extends('main')


@section('contents')

            <div class="block w-full overflow-x-auto p-8">

    <div class="my-12 container">
            <a href='/works' class="flex text-md font-light text-primary1  mb-8 rounded-md transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-210 duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
</svg>
See all works
    </a>
        <h1 class="text-4xl text-primary1 pt-2 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-120 duration-300 font-Akira">{{ $project->title }}</h1>
    </div>
    @if ($project->image)
        <div class="mx-auto my-12 pb-6  place-items-center lg:w-[1000px] sm:w-auto">
            <img src="{{ asset('/storage/' . $project->image) }}" class="rounded w-screen hover:scale-110 transition duration-300 ease-in-out">

        </div>
    @else
        <div class="grid mx-40 my-12 pb-6 place-items-center">
            <img src="https://source.unsplash.com/1200x600?app" class="rounded">

        </div>
    @endif
    <div class="m-6 text-lg text-gray-800 lg:mx-64 sm:mx-8 font-Amiri">
        <article class="trix-editor">
            {!! $project->isi !!}
        </article>
    </div></div>
@endsection
