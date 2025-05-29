<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Toko Teh Hijau</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-green-50">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md border border-green-200">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-green-700">Toko Teh Hijau</h1>
                <p class="text-green-600 mt-2">Silakan masuk ke akun Anda</p>
            </div>

            @if($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-green-700 mb-2">Nama</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-green-600">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" id="nama" name="nama"
                               class="w-full pl-10 pr-3 py-2 border border-green-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500"
                               placeholder="Masukkan nama" required autofocus>
                    </div>
                </div>

                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md transition duration-300">
                    Masuk
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-green-700">Belum punya akun?
                    <a href="{{ route('register') }}" class="text-green-600 hover:text-green-800 font-semibold">Daftar disini</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
