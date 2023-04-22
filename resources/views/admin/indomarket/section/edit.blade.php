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
                                    Detail Indomarket Section
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/indomarket/section/{{ $section->id }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                        <input type="hidden" value="{{ $section->typesection }}" id="typesection" name="typesection">
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                1</label>
                            <input type="text" value="{{ $section->title1 }}" id="title1" name="title1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                2</label>
                            <input type="text" value="{{ $section->title2 }}" id="title2" name="title2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                3</label>
                            <input type="text" value="{{ $section->title3 }}" id="title3" name="title3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 1
                            </label>
                            <textarea id="desc1" name="desc1" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc1 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 2
                            </label>
                            <textarea id="desc2" name="desc2"  class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc2 }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 3
                            </label>
                            <textarea id="desc3" name="desc3"  class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc3 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                1</label>
                            <input type="text" value="{{ $section->subtitle1 }}" id="subtitle1" name="subtitle1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                2</label>
                            <input type="text" value="{{ $section->subtitle2 }}" id="subtitle2" name="subtitle2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                3</label>
                            <input type="text" value="{{ $section->subtitle3 }}" id="subtitle3" name="subtitle3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 1
                            </label>
                            <textarea id="subdesc1" name="subdesc1"   class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc1 }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 2
                            </label>
                            <textarea id="subdesc2" name="subdesc2"  class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc2 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 3
                            </label>
                            <textarea id="subdesc3" name="subdesc3" class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc3 }}</textarea>

                        </div>
                        <div class="mb-6">
                            @if ($section->image1)
                                <img src="{{ asset('/storage/' . $section->image1) }}" class="img-preview1 w-56">
                            @else
                                <img class="img-preview1 w-56">
                            @endif
                            <input type="hidden" name="oldImage1" value="{{ $section->image1 }}">

                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                file</label>
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                aria-describedby="file_input_help" id="image1" name="image1" type="file"
                                onchange="previewImage1()">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                JPG
                                (MAX. 800x400px).</p>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            @if ($section->image2)
                                <img src="{{ asset('/storage/' . $section->image2) }}" class="img-preview1 w-56">
                            @else
                                <img class="img-preview2 w-56">
                            @endif
                            <input type="hidden" name="oldImage2" value="{{ $section->image2 }}">

                            <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                                file</label>
                            <input
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:placeholder-gray-400 @error('image') is-invalid @enderror"
                                aria-describedby="file_input_help" id="image2" name="image2" type="file"
                                onchange="previewImage2()">
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG,
                                JPG
                                (MAX. 800x400px).</p>
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                                    <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function previewImage1() {
            const image = document.querySelector('#image1');
            const imgPreview = document.querySelector('.img-preview1');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
    <script>
        function previewImage2() {
            const image = document.querySelector('#image2');
            const imgPreview = document.querySelector('.img-preview2');

            imgPreview.style.display = 'block';
            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result
            }
        }
    </script>
</x-app-layout>
