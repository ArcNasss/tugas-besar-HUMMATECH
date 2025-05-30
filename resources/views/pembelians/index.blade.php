@extends('layouts.app')

@section('content')
<div class="text-white p-6">
    <h1 class="text-2xl font-bold mb-4">Daftar Pembelian</h1>

    <a href="{{ route('pembelians.create') }}" class="bg-green-600 hover:bg-green-700 px-4 py-2 rounded mb-4 inline-block">+ Tambah Pembelian</a>

    @if(session('success'))
        <div class="bg-green-800 p-3 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="bg-gray-800 rounded shadow overflow-auto">
        <table class="w-full text-left text-white">
            <thead class="bg-gray-700">
                <tr>
                    <th class="px-4 py-2">Barang</th>
                    <th class="px-4 py-2">Jumlah</th>
                    <th class="px-4 py-2">Suplier</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Status</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pembelians as $pembelian)
                    <tr class="border-t border-gray-600">
                        <td class="px-4 py-2">{{ $pembelian->barang->nama }}</td>
                        <td class="px-4 py-2">{{ $pembelian->jumlah }}</td>
                        <td class="px-4 py-2">{{ $pembelian->suplier->nama }}</td>
                        <td class="px-4 py-2">{{ $pembelian->tanggal }}</td>
                        <td class="px-4 py-2">{{ $pembelian->status }}</td>
                        <td class="px-4 py-2 space-x-2">
                            <a href="{{ route('pembelians.edit', $pembelian) }}" class="bg-yellow-500 hover:bg-yellow-600 px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('pembelians.destroy', $pembelian) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin hapus?')">
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
    {{ $pembelians->links() }}
    </div>
</div>
@endsection
