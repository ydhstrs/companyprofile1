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
                                    Add Project
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/about/{{ $about->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="text" id="email" name="email"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $about->email }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Tiktok</label>
                                <input type="text" id="tiktok" name="tiktok"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $about->tiktok }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Linkedin</label>
                                <input type="text" id="linkedin" name="linkedin"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $about->linkedin }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Instagram</label>
                                <input type="text" id="instagram" name="instagram"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $about->instagram }}">
                            </div>
                            <div class="mb-6">
                                @if ($about->image)
                                    <img src="{{ asset('/storage/' . $about->image) }}" class="img-preview w-56">
                                @else
                                    <img class="img-preview w-56">
                                @endif
                                <input type="hidden" name="oldImage" value="{{ $about->image }}">

                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    file</label>
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                    aria-describedby="file_input_help" id="image" name="image" type="file"
                                    onchange="previewImage()">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                    JPG
                                    (MAX. 800x400px).</p>
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-6 w-full">

                                <iframe src="{{ asset('/storage/' . $about->cv) }}" frameBorder="0" scrolling="auto"
                                    height="700px" width="50%"></iframe>
                                <input type="hidden" name="oldCv" value="{{ $about->cv }}">


                                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                    CV</label>
                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400"
                                    aria-describedby="file_input_help" id="cv" name="cv" type="file">

                            </div>
                            <div class="mb-6">
                                <label for="isi" class="block mb-2 text-sm font-medium text-gray-900">Isi</label>
                                <textarea id="isi" name="isi"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"> {{ $about->isi }}</textarea>
                            </div>

                            <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
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
