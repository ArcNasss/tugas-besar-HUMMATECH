@extends('layouts.app')

@section('content')
<div class="p-6 text-white">
    <h1 class="text-2xl font-bold mb-4">Daftar Penjualan</h1>

    <a href="{{ route('penjualans.create') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Penjualan</a>

    @if(session('success'))
        <div class="bg-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="bg-gray-800 rounded shadow overflow-auto">
        <table class="w-full text-white">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-2">Pembeli</th>
                    <th class="px-4 py-2">User</th>
                    <th class="px-4 py-2">Tanggal Pesan</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penjualans as $penjualan)
                    <tr class="border-t border-gray-600">
                        <td class="px-4 py-2">{{ $penjualan->pembeli->nama ?? '-' }}</td>
                        <td class="px-4 py-2">{{ $penjualan->user->name }}</td>
                        <td class="px-4 py-2">{{ $penjualan->tanggal_pesan }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('penjualans.edit', $penjualan) }}" class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('penjualans.destroy', $penjualan) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        <div class="mt-4">
    {{ $penjualans->links() }}
    </div>
</div>
@endsection
