<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify Email - {{ config('app.name') }}</title>
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
                    <i data-lucide="mail-check" class="h-6 w-6 text-white"></i>
                </div>
                <h1 class="text-xl font-bold text-gray-900">Verify Your Email</h1>
                <p class="mt-1.5 text-sm text-gray-500">Before continuing, could you verify your email address by clicking on the link we just emailed to you?</p>
            </div>

            <div class="px-8 pb-8 pt-6 text-center">
                @if (session('status') === 'verification-link-sent')
                    <div class="mb-5 p-3 bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm rounded-lg">
                        A new verification link has been sent.
                    </div>
                @endif
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit"
                        class="w-full py-3 px-4 text-white font-medium rounded-xl shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out hover:brightness-110 mb-3"
                        style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                        Resend Verification Email
                    </button>
                </form>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="text-sm text-gray-500 hover:underline">Log Out</button>
                </form>
            </div>
        </div>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>
