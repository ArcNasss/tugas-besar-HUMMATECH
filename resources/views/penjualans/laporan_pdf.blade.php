<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Penjualan</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #000; padding: 5px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
    <h2>Laporan Penjualan</h2>
    <p>Tanggal Cetak: {{ now()->format('d-m-Y H:i') }}</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
                <th>Kasir</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penjualans as $i => $penjualan)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $penjualan->detailPenjualans }}</td>
                    <td>{{ $penjualan->jumlah }}</td>
                    <td>Rp {{ number_format($penjualan->harga_satuan, 0, ',', '.') }}</td>
                    <td>Rp {{ number_format($penjualan->jumlah * $penjualan->harga_satuan, 0, ',', '.') }}</td>
                    <td>{{ $penjualan->user->name }}</td>
                   <td>
    {{ $penjualan->created_at ? $penjualan->created_at->format('d-m-Y H:i') : '-' }}
</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
