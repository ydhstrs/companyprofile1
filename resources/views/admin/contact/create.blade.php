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
                                    Add Contact
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="block w-full overflow-x-auto p-8">
                        <form method="post" action="/dashboard/contact">
                            @csrf
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Address</label>
                                <input type="text" id="address" name="address"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                                <input type="text" id="email" name="email"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Tiktok</label>
                                <input type="text" id="tiktok" name="tiktok"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Linkedin</label>
                                <input type="text" id="linkedin" name="linkedin"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Instaram</label>
                                <input type="text" id="instagram" name="instagram"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Twitter</label>
                                <input type="text" id="twitter" name="twitter"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Youtube</label>
                                <input type="text" id="youtube" name="youtube"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg ">
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
