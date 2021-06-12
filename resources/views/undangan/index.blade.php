<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Undangan') }}
            <a href="{{ route('undangan.create') }}" class="float-right bg-blue-500 text-white p-2  rounded hover:bg-blue-400">Tambah Undangan</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full border border-green-800">
                        <thead>
                            <tr class="bg-green-300">
                                <th class="border border-green-600">No</th>
                                <th class="border border-green-600">Nama</th>
                                <th class="border border-green-600">Email</th>
                                <th class="border border-green-600">Foto</th>
                                <th class="border border-green-600">Status</th>
                                <th class="border border-green-600">QR</th>
                                <th class="border border-green-600"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $u)
                            <tr>
                                <td class="border border-green-600 py-5">{{ $loop->iteration }}</td>
                                <td class="border border-green-600 py-5">{{ $u->name }}</td>
                                <td class="border border-green-600 py-5">{{ $u->email }}</td>
                                <td class="border border-green-600 py-5 text-center">
                                    <img class="w-10 h-10 rounded-full m-auto" src="{{ $u->avatar }}" alt="">
                                </td>
                                <td class="border border-green-600 py-5 text-center">
                                    @if ($u->attend == '0')
                                    <span class="bg-info px-2 py-2 bg-gray-300 rounded text-white text-center m-auto">
                                        Belum Datang
                                    </span>
                                    @else
                                    <span class="rounded text-white bg-green-600 px-2 py-2 text-center m-auto">
                                        Datang
                                    </span>
                                    @endif
                                </td>
                                <td class="border border-green-600 py-5 text-center">
                                    <img class="m-auto" src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(100)->generate($u->email)) !!} ">
                                </td>
                                <td class="border border-green-600 py-5 text-center">
                                    <form method="post" action="{{ route('undangan.destroy', ['undangan' => $u->id ]) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="bg-red-500 p-2 rounded text-white m-auto" >Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $user->links() }}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
