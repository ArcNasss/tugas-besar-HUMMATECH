<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Sedunusa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        primary: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        dark: {
                            900: '#0f172a',
                            800: '#1e293b',
                            700: '#334155',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .gradient-bg {
            background: linear-gradient(135deg, #0f172a 0%, #14532d 100%);
        }
        .input-field {
            background: rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        .input-field:focus {
            background: rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.5);
        }
        .radio-card {
            background: rgba(255, 255, 255, 0.03);
            transition: all 0.3s ease;
        }
        .radio-card:hover {
            background: rgba(255, 255, 255, 0.07);
        }
        .radio-card.selected {
            background: rgba(34, 197, 94, 0.1);
            border-color: rgba(34, 197, 94, 0.5);
        }
    </style>
</head>
<body class="gradient-bg min-h-full flex items-center justify-center p-4 font-sans text-white">
    <div class="glass-card rounded-2xl overflow-hidden w-full max-w-xl">
        <!-- Animated Background Element -->
        <div class="relative h-2 bg-gradient-to-r from-primary-500 to-primary-700">
            <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-primary-600 animate-pulse"></div>
        </div>

        <div class="p-8">
            <!-- Logo & Title -->
            <div class="text-center mb-8">
                <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-primary-700/20 mb-4 border border-primary-500/30">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                </div>
                <h1 class="text-3xl font-bold bg-gradient-to-r from-primary-400 to-white bg-clip-text text-transparent">Buat Akun Baru</h1>
                <p class="mt-2 text-primary-200">Bergabung dengan komunitas Toko Sedunusa</p>
            </div>

            <!-- Register Form -->
            <form class="space-y-6" method="POST" action="{{ route('register') }}">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="username" class="block text-sm font-medium text-primary-100 mb-2">Nama Lengkap</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="username" name="username" type="text" required
                                   class="input-field w-full pl-10 pr-3 py-3 rounded-lg border border-white/10 focus:outline-none focus:ring-0"
                                   placeholder="username anda">
                        </div>
                    </div>


                </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-primary-100 mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 8V6a5 5 0 0110 0v2h1a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V9a1 1 0 011-1h1zm2-2a3 3 0 016 0v2H7V6z" clip-rule="evenodd" />
                            </svg>
                            </div>
                            <input id="password" name="password" type="password" required
                                   class="input-field w-full pl-10 pr-3 py-3 rounded-lg border border-white/10 focus:outline-none focus:ring-0"
                                   placeholder="password anda">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-primary-100 mb-2">Password Confirm</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-primary-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 8V6a5 5 0 0110 0v2h1a1 1 0 011 1v9a1 1 0 01-1 1H4a1 1 0 01-1-1V9a1 1 0 011-1h1zm2-2a3 3 0 016 0v2H7V6z" clip-rule="evenodd" />
                            </svg>
                            </div>
                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                   class="input-field w-full pl-10 pr-3 py-3 rounded-lg border border-white/10 focus:outline-none focus:ring-0"
                                   placeholder="password anda">
                        </div>
                    </div>
                </div>

                {{-- <div>
                    <label class="block text-sm font-medium text-primary-100 mb-2">Jenis Kelamin</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="radio-card rounded-lg border border-white/10 p-4 flex items-center cursor-pointer transition-all">
                            <input type="radio" name="jenis_kelamin" value="L" class="sr-only peer">
                            <div class="w-5 h-5 rounded-full border border-primary-400 mr-3 flex items-center justify-center peer-checked:bg-primary-500">
                                <div class="w-2 h-2 rounded-full bg-white opacity-0 peer-checked:opacity-100"></div>
                            </div>
                            <div>
                                <div class="font-medium text-primary-100">Laki-laki</div>
                            </div>
                        </label>
                        <label class="radio-card rounded-lg border border-white/10 p-4 flex items-center cursor-pointer transition-all">
                            <input type="radio" name="jenis_kelamin" value="P" class="sr-only peer">
                            <div class="w-5 h-5 rounded-full border border-primary-400 mr-3 flex items-center justify-center peer-checked:bg-primary-500">
                                <div class="w-2 h-2 rounded-full bg-white opacity-0 peer-checked:opacity-100"></div>
                            </div>
                            <div>
                                <div class="font-medium text-primary-100">Perempuan</div>
                            </div>
                        </label>
                    </div>
                </div>---}}



                <div>
                    <button type="submit"
                            class="w-full flex justify-center items-center py-3 px-4 rounded-lg bg-gradient-to-r from-primary-500 to-primary-600 hover:from-primary-600 hover:to-primary-700 text-white font-medium shadow-lg hover:shadow-primary-500/20 transition-all duration-300">
                        <span>Daftar Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-primary-300">
                    Sudah punya akun?
                    <a href="/login" class="font-medium text-primary-400 hover:text-primary-300 transition-colors">Masuk disini</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Web3 Animated Elements -->
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden pointer-events-none -z-10">
        <div class="absolute top-20 left-10 w-32 h-32 rounded-full bg-primary-500/10 blur-xl animate-float"></div>
        <div class="absolute top-1/3 right-20 w-40 h-40 rounded-full bg-primary-600/10 blur-xl animate-float animation-delay-2000"></div>
        <div class="absolute bottom-20 left-1/3 w-28 h-28 rounded-full bg-primary-400/10 blur-xl animate-float animation-delay-4000"></div>
    </div>

        <!-- Toast Notification -->
    <div id="toast" class="fixed bottom-4 right-4 z-50 hidden">
        <div class="glass-card rounded-lg p-4 shadow-lg flex items-start border-l-4 border-primary-500 max-w-xs">
            <div class="flex-shrink-0">
                <svg id="toast-icon" class="h-6 w-6 text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div class="ml-3">
                <p id="toast-title" class="text-sm font-medium text-white">Success</p>
                <p id="toast-message" class="mt-1 text-sm text-primary-200">Operasi berhasil dilakukan</p>
            </div>
            <button onclick="hideToast()" class="ml-4 flex-shrink-0 text-primary-300 hover:text-white">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script>
        function showToast(type = 'success', message = 'Operasi berhasil') {
            const toast = document.getElementById('toast');
            const icon = document.getElementById('toast-icon');
            const title = document.getElementById('toast-title');
            const msg = document.getElementById('toast-message');

            title.textContent = type === 'success' ? 'Sukses' : 'Gagal';
            msg.textContent = message;

            icon.innerHTML = type === 'success'
                ? `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />`
                : `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />`;

            icon.className = `h-6 w-6 ${type === 'success' ? 'text-primary-400' : 'text-red-400'}`;

            toast.classList.remove('hidden');

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 5000);
        }

        function hideToast() {
            document.getElementById('toast').classList.add('hidden');
        }

        document.addEventListener('DOMContentLoaded', function() {
            @if(session('success'))
                showToast('success', '{{ session('success') }}');
            @elseif(session('error'))
                showToast('error', '{{ session('error') }}');
            @endif
        });
    </script>

    @stack('scripts')
</body>
</html>
