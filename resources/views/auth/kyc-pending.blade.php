<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Under Review - Unova Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <style>
        @keyframes pulse-dot { 0%,100%{opacity:1} 50%{opacity:.4} }
        .pulse-dot { animation: pulse-dot 2s ease-in-out infinite; }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-900 min-h-screen flex items-center justify-center px-4 py-12">
    <div class="w-full max-w-lg">

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="relative overflow-hidden text-center px-8 pt-9 pb-8" style="background: radial-gradient(120% 140% at 0% 0%, #1c1f27 0%, #0b0c10 55%, #0b0c10 100%);">
                <img src="{{ asset('our-logo.png') }}" alt="Logo" class="h-10 mx-auto mb-4 brightness-0 invert">
                <h1 class="text-white font-bold text-lg">Unova Saver Bank Corporation</h1>
                <p class="text-gray-400 text-sm mt-1">Account Verification Portal</p>
            </div>

            <div class="px-8 py-8">
                <div class="w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6 bg-amber-100">
                    <i data-lucide="hourglass" class="h-9 w-9 text-amber-600"></i>
                </div>

                <h2 class="text-xl font-bold text-gray-900 text-center mb-2">Your Account Is Under Review</h2>
                <p class="text-gray-500 text-center text-sm leading-relaxed mb-7">
                    Thank you for submitting your identification documents.<br>
                    Our compliance team is currently reviewing your application.
                </p>

                <ul class="mb-7">
                    <li class="flex items-start gap-3.5 py-3.5 border-b border-gray-100">
                        <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold bg-emerald-100 text-emerald-700">
                            <i data-lucide="check" class="h-4 w-4"></i>
                        </div>
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">Registration Complete</p>
                            <p class="text-gray-500">Your account has been created successfully.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5 py-3.5 border-b border-gray-100">
                        @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold bg-emerald-100 text-emerald-700">
                                <i data-lucide="check" class="h-4 w-4"></i>
                            </div>
                        @else
                            <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold bg-amber-100 text-amber-700">2</div>
                        @endif
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">
                                @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                                    Documents Submitted
                                @else
                                    <span class="inline-block w-2 h-2 rounded-full bg-amber-500 pulse-dot mr-1.5 align-middle"></span>Upload ID Documents
                                @endif
                            </p>
                            <p class="text-gray-500">
                                @if(Auth::user()->id_card || Auth::user()->passport || Auth::user()->driver_license)
                                    Your documents have been received and are queued for review.
                                @else
                                    You haven't uploaded your ID documents yet.
                                @endif
                            </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5 py-3.5 border-b border-gray-100">
                        <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold bg-gray-100 text-gray-400">3</div>
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">Admin Approval</p>
                            <p class="text-gray-500">Our team will verify your identity within 1&ndash;2 business days.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-3.5 py-3.5">
                        <div class="flex-shrink-0 w-7 h-7 rounded-full flex items-center justify-center text-xs font-bold bg-gray-100 text-gray-400">4</div>
                        <div class="text-sm">
                            <p class="font-semibold text-gray-900">Account Activated</p>
                            <p class="text-gray-500">You'll receive an email once your account is fully active.</p>
                        </div>
                    </li>
                </ul>

                <div class="flex items-start gap-3 bg-fuchsia-50 border border-fuchsia-100 rounded-xl px-4 py-3.5 mb-6">
                    <i data-lucide="mail" class="h-4 w-4 text-fuchsia-600 mt-0.5 flex-shrink-0"></i>
                    <p class="text-sm text-fuchsia-800 leading-relaxed">
                        We'll send a confirmation email to <strong>{{ Auth::user()->email }}</strong>
                        as soon as your account has been reviewed.
                    </p>
                </div>

                @if(!Auth::user()->id_card && !Auth::user()->passport && !Auth::user()->driver_license)
                    <a href="{{ route('kyc.upload.form') }}"
                        class="flex items-center justify-center gap-2 w-full py-3 px-4 border-2 border-gray-200 rounded-xl text-gray-700 font-semibold text-sm hover:border-primary-500 hover:text-primary-600 transition duration-150 mb-3">
                        <i data-lucide="upload" class="h-4 w-4"></i> Upload ID Documents
                    </a>
                @else
                    <a href="{{ route('kyc.upload.form') }}"
                        class="flex items-center justify-center gap-2 w-full py-3 px-4 border-2 border-gray-200 rounded-xl text-gray-700 font-semibold text-sm hover:border-primary-500 hover:text-primary-600 transition duration-150 mb-3">
                        <i data-lucide="refresh-cw" class="h-4 w-4"></i> Re-upload Documents
                    </a>
                @endif

                <a href="{{ route('sign.out') }}"
                    class="flex items-center justify-center gap-2 w-full py-3 px-4 rounded-xl bg-gray-50 text-gray-500 text-sm hover:bg-red-50 hover:text-red-600 transition duration-150">
                    <i data-lucide="log-out" class="h-4 w-4"></i> Log out
                </a>
            </div>
        </div>
    </div>
    <script>lucide.createIcons();</script>
</body>
</html>
