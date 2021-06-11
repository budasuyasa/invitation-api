<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Undangan') }}
            <a href="{{ route('undangan.index') }}" class="float-right bg-red-500 text-white p-2  rounded hover:bg-red-400">Batal</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    @if(Session::has('message'))
                        <div class="w-full p-2 text-white bg-green-600 rounded">
                            {{ Session::get('message') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('undangan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="container items-center px-5 py-12 lg:px-20">
                        <form class="flex flex-col w-full p-10 px-8 pt-6 mx-auto my-6 mb-4 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:w-1/2 ">
                          <section class="flex flex-col w-full h-full p-1 overflow-auto">
                            <header class="flex flex-col items-center justify-center py-12 text-base text-blueGray-500 transition duration-500 ease-in-out transform bg-white border border-dashed rounded-lg focus:border-blue-500 focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                              <input required type="file" name="file"  accept="image/png, image/gif, image/jpeg"  class="w-auto px-2 py-1 my-2 mr-2 text-blueGray-500 transition duration-500 ease-in-out transform border rounded-md hover:text-blueGray-600 text-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blueGray-100"> Pilih Foto  </input>
                            </header>
                          </section>
                          <div class="relative pt-4">
                            <label for="name" class="text-base leading-7 text-blueGray-500">Nama</label>
                            <input name="name" required type="text" id="email" name="email" placeholder="Nama" class="w-full px-4 py-2 mt-2 mr-4 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                          </div>
                          <div class="relative mt-4">
                            <label for="name" class="text-base leading-7 text-blueGray-500">Email</label>
                            <input name="email" required type="email" id="email" name="email" placeholder="Email" class="w-full px-4 py-2 mt-2 text-base text-black transition duration-500 ease-in-out transform rounded-lg bg-blueGray-100 focus:border-blueGray-500 focus:bg-white focus:outline-none focus:shadow-outline focus:ring-2 ring-offset-current ring-offset-2">
                          </div>
                          <div class="flex items-center w-full pt-4">
                            <button class="w-full py-3 text-base text-white transition duration-500 ease-in-out transform bg-blue-600 border-blue-600 rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:bg-blue-800 "> Simpan </button>
                          </div>
                        </form>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
