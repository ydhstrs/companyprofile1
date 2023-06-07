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
                                    Edit Bio
                                </h3>
                            </div>
                        </div>
                    </div>

            <div class="block w-full overflow-x-auto">
                <form method="post" action="/dashboard/bio/{{ $bio->id }}">
                    @method('put')
                    @csrf

             <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Saramoda</label>
                                <input type="text" id="saramoda" name="saramoda"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->saramoda }}">
                            </div>
                            <div class="mb-6">
                                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">Kepul</label>
                                <input type="text" id="kepul" name="kepul"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->kepul }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Indo Market</label>
                                <input type="text" id="indomarket" name="indomarket"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->indomarket }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Legalin</label>
                                <input type="text" id="legalin" name="legalin"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->legalin }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Foundation</label>
                                <input type="text" id="foundation" name="foundation"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->foundation }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Barbekoe</label>
                                <input type="text" id="barbekoe" name="barbekoe"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->barbekoe }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Indo Properti</label>
                                <input type="text" id="indoproperti" name="indoproperti"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->indoproperti }}">
                            </div>
                            <div class="mb-6">
                                <label for="text"
                                    class="block mb-2 text-sm font-medium text-gray-900">Indo Farm</label>
                                <input type="text" id="indofarm" name="indofarm"
                                    class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-black text-sm rounded-lg"
                                    value="{{ $bio->indofarm }}">
                            </div>

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
            </div>
            
        </div>


    </div>
  
</x-app-layout>
 