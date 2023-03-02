<x-app-layout>
    @if (session('status'))
        <div class="card-body">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-lg text-blueGray-700">
                                    Project
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">

<div class="mb-6">
        <h1 class="text-3xl text-center">{{ $project->title }}</h1>
    </div>
    @if ($project->image)
        <div class="grid mx-40 my-10 place-items-center overflow-hidden">
            <img src="{{ asset('/storage/' . $project->image) }}" class="rounded w-screen">

        </div>
    @else
        <div class="grid mx-40 my-10 place-items-center">
            <img src="https://source.unsplash.com/1200x600?forest" class="rounded">

        </div>
    @endif
    <div class="m-6 text-base text-gray-800">
        <article class="trix-editor">
            {!! $project->isi !!}
        </article>
    </div></div>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
</x-app-layout>
