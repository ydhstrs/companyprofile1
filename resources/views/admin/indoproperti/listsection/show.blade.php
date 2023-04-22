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
                                    Detail Indoproperti List Section
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Section</label>
                            <input readonly type="text" id="title" name="title"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                value="{{ $listsection->section->typesection }}">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                            <input readonly type="text" id="title" name="title"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                value="{{ $listsection->title }}">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle</label>
                            <input readonly type="text" id="subtitle" name="subtitle"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                value="{{ $listsection->subtitle }}">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Slug</label>
                            <input readonly type="text" id="slug" name="slug"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                value="{{ $listsection->slug }}">
                        </div>

                        <div class="mb-6">
                            @if ($listsection->image)
                                <img src="{{ asset('/storage/' . $listsection->image) }}" class="img-preview w-56">
                            @endif

                        </div>
                        <div class="mb-6">
                            <label class="block">
                                <span class="text-gray-700">Isi</span>
                                <p>{!! $listsection->isi !!} </p>
                            </label>
                            @error('description')
                                <div class="text-sm text-red-600">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<script>
    const title = document.querySelector("#title");
    const slug = document.querySelector("#slug");

    title.addEventListener("keyup", function() {
        let preslug = title.value;
        preslug = preslug.replace(/ /g, "-");
        slug.value = preslug.toLowerCase();
    });
</script>
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
