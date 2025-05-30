<?php

namespace App\Http\Controllers;
// app/Http/Controllers/PenjualanController.php
namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pembeli;
use App\Models\User;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with(['pembeli', 'user'])->paginate(10);
        return view('penjualans.index', compact('penjualans'));
    }

    public function create()
    {
        $pembelis = Pembeli::all();
        $users = User::all();
        return view('penjualans.create', compact('pembelis', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'user_id' => 'required|exists:users,id',
            'tanggal_pesan' => 'required|date',
        ]);

        Penjualan::create($request->all());

        return redirect()->route('penjualans.index')->with('success', 'Data penjualan berhasil ditambahkan.');
    }

    public function edit(Penjualan $penjualan)
    {
        $pembelis = Pembeli::all();
        $users = User::all();
        return view('penjualans.edit', compact('penjualan', 'pembelis', 'users'));
    }

    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'pembeli_id' => 'required|exists:pembelis,id',
            'user_id' => 'required|exists:users,id',
            'tanggal_pesan' => 'required|date',
        ]);

        $penjualan->update($request->all());

        return redirect()->route('penjualans.index')->with('success', 'Data penjualan berhasil diperbarui.');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualans.index')->with('success', 'Data penjualan berhasil dihapus.');
    }
}

