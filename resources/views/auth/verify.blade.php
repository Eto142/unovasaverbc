<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Your Account - Unova Saver Bank Corporation</title>
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
            <a href="/"><img src="{{ asset('our-logo.png') }}" alt="Unova Saver Bank Corporation" class="h-10 mx-auto"></a>
        </div>

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <div class="px-8 pt-8 pb-2 text-center">
                <div class="w-14 h-14 rounded-full flex items-center justify-center mx-auto mb-4" style="background: linear-gradient(135deg, #e51c24, #a51c24);">
                    <i data-lucide="mail-check" class="h-6 w-6 text-white"></i>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Verify Your Account</h1>
                <p class="mt-1.5 text-sm text-gray-500">We sent a verification code to<br><span class="font-medium text-gray-700">{{ $email }}</span></p>
            </div>

            <div class="px-8 pb-8 pt-6">
                @if (session('error'))
                    <div class="mb-5 flex items-center gap-2 text-sm text-red-600 bg-red-50 border border-red-200 rounded-lg p-3">
                        <i data-lucide="alert-circle" class="h-4 w-4 flex-shrink-0"></i>
                        <span>{{ session('error') }}</span>
                    </div>
                @endif
                @if (session('message'))
                    <div class="mb-5 flex items-center gap-2 text-sm text-emerald-700 bg-emerald-50 border border-emerald-200 rounded-lg p-3">
                        <i data-lucide="check-circle" class="h-4 w-4 flex-shrink-0"></i>
                        <span>{{ session('message') }}</span>
                    </div>
                @endif

                <form action="{{ route('code') }}" method="POST">
                    @csrf
                    <input type="hidden" name="email" value="{{ $email }}">

                    <div class="mb-5">
                        <label for="digit" class="block text-sm font-medium text-gray-700 mb-2">Enter Verification Code</label>
                        <input
                            type="text"
                            id="digit"
                            name="digit"
                            class="w-full px-4 py-3 border-2 border-gray-300 rounded-xl text-center text-xl font-bold tracking-[0.4em] focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                            placeholder="········"
                            maxlength="8"
                            autocomplete="one-time-code"
                            autofocus>
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 text-white font-medium rounded-xl shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out flex items-center justify-center hover:brightness-110"
                        style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                        <i data-lucide="shield-check" class="h-5 w-5 mr-2"></i>
                        Confirm &amp; Verify
                    </button>
                </form>

                <div class="flex items-center justify-center gap-1.5 mt-5 text-sm text-gray-500">
                    <span>Didn't receive a code?</span>
                    <a href="{{ route('resendCode', $id) }}" class="font-semibold text-primary-600 hover:text-primary-700">Resend Code</a>
                </div>
            </div>
        </div>

        <p class="mt-6 text-center text-sm text-gray-500">
            <a href="{{ url('/') }}" class="text-primary-600 hover:text-primary-700 font-medium">&larr; Back to Home</a>
        </p>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>
