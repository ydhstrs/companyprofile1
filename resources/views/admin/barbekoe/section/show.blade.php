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
                                   Detail Barbekoe Section
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">

                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Section
                            </label>
                            <input readonly type="text" value="{{ $section->typesection }}" id="typesection" name="typesection"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                1</label>
                            <input readonly type="text" value="{{ $section->title1 }}" id="title1" name="title1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                2</label>
                            <input readonly type="text" value="{{ $section->title2 }}" id="title2" name="title2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Title
                                3</label>
                            <input readonly type="text" value="{{ $section->title3 }}" id="title3" name="title3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 1
                            </label>
                            <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc1 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 2
                            </label>
                            <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc2 }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Desc 3
                            </label>
                            <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->desc3 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                1</label>
                            <input readonly type="text" value="{{ $section->subtitle1 }}" id="subtitle1" name="subtitle1"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                2</label>
                            <input readonly type="text" value="{{ $section->subtitle2 }}" id="subtitle2" name="subtitle2"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Subtitle
                                3</label>
                            <input readonly type="text" value="{{ $section->subtitle3 }}" id="subtitle3" name="subtitle3"
                                class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 1
                            </label>
                            <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc1 }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 2
                            </label>
                                                       <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc2 }}</textarea>

                        </div>
                        <div class="mb-6">
                            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">SubDesc 3
                            </label>
                                                      <textarea readonly class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg "> {{ $section->subdesc3 }}</textarea>

                        </div>
                        <div class="grid mx-40 my-10 place-items-center overflow-hidden">
                            <img src="{{ asset('/storage/' . $section->image1) }}" class="rounded w-48">
                        </div>
                        <div class="grid mx-40 my-10 place-items-center overflow-hidden">
                            <img src="{{ asset('/storage/' . $section->image2) }}" class="rounded w-48">
                        </div>
                    </div>

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
