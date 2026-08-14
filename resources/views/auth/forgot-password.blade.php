<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - {{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('our-logo.png') }}" type="image/png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 500: '#e51c24', 600: '#e51c24', 700: '#a51c24' },
                        secondary: { 500: '#AC39D4', 600: '#AC39D4', 700: '#8a2aaa' }
                    },
                    fontFamily: { 'sans': ['Lato', 'sans-serif'] }
                }
            }
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
</head>
<body class="font-sans bg-gray-50 text-gray-900 min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-md">
        <div class="text-center mb-8">
            <a href="/"><img src="{{ asset('our-logo.png') }}" alt="{{ config('app.name') }}" class="h-10 mx-auto"></a>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="px-8 pt-8 pb-2 text-center">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #e51c24, #a51c24);">
                    <i data-lucide="mail" class="h-6 w-6 text-white"></i>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Forgot Password</h1>
                <p class="mt-1.5 text-sm text-gray-500">Enter your email address and we'll send you a password reset link.</p>
            </div>

            <div class="px-8 pb-8 pt-6">
                @if (session('status'))
                    <div class="mb-5 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm rounded-lg">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-5 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                    </div>
                    <button type="submit"
                        class="w-full py-3 px-4 text-white font-medium rounded-xl shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out hover:brightness-110"
                        style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                        Send Reset Link
                    </button>
                </form>
            </div>
        </div>

        <p class="mt-6 text-center text-sm text-gray-500">
            <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-700 font-medium">Back to login</a>
        </p>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>
