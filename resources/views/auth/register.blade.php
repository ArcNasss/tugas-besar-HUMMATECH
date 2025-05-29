<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-semibold mb-6 text-center">Register Pembeli</h2>

        @if ($errors->any())
            <div class="mb-4 text-red-500 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm">Nama</label>
                <input type="text" name="nama" class="w-full border rounded p-2" required>
            </div>

            <div>
                <label class="block text-sm">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="w-full border rounded p-2" required>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div>
                <label class="block text-sm">Alamat</label>
                <textarea name="alamat" class="w-full border rounded p-2" required></textarea>
            </div>

            <div>
                <label class="block text-sm">No HP</label>
                <input type="text" name="no_hp" class="w-full border rounded p-2" required>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Register</button>
        </form>
    </div>
</body>
</html>
