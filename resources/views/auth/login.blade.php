<!DOCTYPE html>
<html lang="en">
<head>
    <title>Account Login - Unova Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Unova Saver Bank Corporation">
    <meta name="application-name" content="Unova Saver Bank Corporation">
    <meta name="description" content="Swift and Secure Money Transfer to any UK bank account will become a breeze with Unova Saver Bank Corporation.">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/png">


    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#ffe0e1',
                            100: '#ffb3b5',
                            200: '#ff8082',
                            300: '#ff4d55',
                            400: '#ff2028',
                            500: '#e51c24',
                            600: '#e51c24',
                            700: '#a51c24',
                            800: '#a51c24',
                            900: '#7a1018',
                        },
                        secondary: {
                            50: '#f3d6fc',
                            100: '#e4a8f7',
                            200: '#d47af2',
                            300: '#c04ce8',
                            400: '#b63fdb',
                            500: '#AC39D4',
                            600: '#AC39D4',
                            700: '#8a2aaa',
                            800: '#6e2085',
                            900: '#511660',
                        },
                        ink: {
                            900: '#0b0c10',
                            800: '#14161c',
                            700: '#1c1f27',
                        }
                    },
                    fontFamily: {
                        'sans': ['Lato', 'sans-serif'],
                    },
                    animation: {
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- CSS Variables -->
    <script>
        // Set CSS theme variables
        document.documentElement.style.setProperty('--primary-color', '#e51c24');
        document.documentElement.style.setProperty('--primary-color-dark', '#a51c24');
        document.documentElement.style.setProperty('--primary-color-light', '#ff4d55');
        document.documentElement.style.setProperty('--secondary-color', '#AC39D4');
        document.documentElement.style.setProperty('--secondary-color-dark', '#8a2aaa');
        document.documentElement.style.setProperty('--secondary-color-light', '#c860e0');
        document.documentElement.style.setProperty('--text-color', '#111827');
        document.documentElement.style.setProperty('--bg-color', '#f7f5fb');
        document.documentElement.style.setProperty('--card-bg-color', '#ffffff');
    </script>


    <!-- Modern Loading Animation -->
    <style>
        .page-loading {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all .4s .2s ease-in-out;
            background-color: #f7f5fb;
            visibility: hidden;
            z-index: 9999;
        }
        .page-loading.active {
            opacity: 1;
            visibility: visible;
        }
        .page-loading-inner {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            transform: translateY(-50%);
            transition: opacity .2s ease-in-out;
            opacity: 0;
        }
        .page-loading.active>.page-loading-inner {
            opacity: 1;
        }

        .loading-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .loading-animation {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 80px;
            height: 80px;
            margin-bottom: 1rem;
            position: relative;
        }

        .loading-animation .circle {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 4px solid transparent;
            mix-blend-mode: overlay;
            animation: rotateCircle 1.5s linear infinite;
        }

        .loading-animation .circle:nth-child(1) {
            border-top-color: var(--primary-color);
            animation-delay: 0s;
        }

        .loading-animation .circle:nth-child(2) {
            border-right-color: var(--primary-color-light);
            animation-delay: 0.2s;
        }

        .loading-animation .circle:nth-child(3) {
            border-bottom-color: var(--secondary-color);
            animation-delay: 0.4s;
        }

        .loading-animation .circle:nth-child(4) {
            border-left-color: var(--primary-color-light);
            animation-delay: 0.6s;
        }

        .loading-animation .core {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: linear-gradient(45deg, var(--primary-color-light), var(--primary-color-dark));
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
            animation: pulse 1s ease-in-out infinite alternate;
        }

        .page-loading .text {
            color: var(--primary-color);
            font-weight: 500;
            letter-spacing: 0.05em;
            margin-top: 0.5rem;
            font-size: 0.875rem;
            background: linear-gradient(90deg, var(--primary-color-dark), var(--primary-color-light), var(--primary-color-dark));
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 2s linear infinite;
        }

        @keyframes  rotateCircle {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        @keyframes  pulse {
            from { transform: scale(0.8); opacity: 0.8; }
            to { transform: scale(1.2); opacity: 1; }
        }

        @keyframes  gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Interactive elements */
        .input-wrapper {
            position: relative;
            transition: all 0.2s ease;
        }

        .input-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 1rem;
            color: #9ca3af;
            transition: color 0.2s ease;
        }

        .input-wrapper:focus-within .input-icon {
            color: var(--primary-color);
        }

        input:focus + .input-toggle {
            color: var(--primary-color);
        }

        /* --- Brand panel (left) --- */
        .brand-panel {
            background: radial-gradient(120% 140% at 0% 0%, #1c1f27 0%, #0b0c10 55%, #0b0c10 100%);
        }

        .dot-grid {
            background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .panel-glow {
            background: radial-gradient(60% 60% at 50% 40%, rgba(229,28,36,0.28), transparent 70%);
            filter: blur(10px);
        }

        /* Bank card graphic */
        .bank-card {
            background: linear-gradient(135deg, #ff2028 0%, #e51c24 38%, #8a2aaa 78%, #511660 100%);
            box-shadow: 0 30px 60px -20px rgba(0,0,0,0.6), 0 0 0 1px rgba(255,255,255,0.06) inset;
        }
        .bank-card::before {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: linear-gradient(115deg, rgba(255,255,255,0.16) 0%, transparent 32%);
            pointer-events: none;
        }
        .card-chip {
            background: linear-gradient(135deg, #f4d99a, #d4af61);
        }

        .divider-dot::before {
            content: "";
            display: inline-block;
            width: 3px;
            height: 3px;
            border-radius: 9999px;
            background: currentColor;
            margin: 0 0.65rem;
            vertical-align: middle;
        }

        ::selection {
            background: rgba(172, 57, 212, 0.35);
        }
    </style>
    <!-- Web Application Manifest -->
<link rel="manifest" href="{{ asset('manifest.json') }}">
<!-- Chrome for Android theme color -->
<meta name="theme-color" content="#e51c24">

<!-- Add to homescreen for Chrome on Android -->
<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="Unova Saver Bank Corporation">
<link rel="icon" sizes="512x512" href="{{ asset('logo1.png') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Unova Saver Bank Corporation">
<link rel="apple-touch-icon" href="{{ asset('logo1.png') }}">


<link href="/images/icons/splash-640x1136.png" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-750x1334.png" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2208.png" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1125x2436.png" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-828x1792.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1242x2688.png" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1536x2048.png" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2224.png" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-1668x2388.png" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="/images/icons/splash-2048x2732.png" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/images/icons/icon-512x512.png">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script></head>

<body class="font-sans bg-gray-50 text-gray-900">
    <!-- Page Loader -->
    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="loading-container">
                <div class="loading-animation">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="core"></div>
                </div>
                <div class="text">Unova Saver Bank Corporation</div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="min-h-screen w-full flex">

        <!-- Left: Brand panel (desktop only) -->
        <div class="hidden lg:flex lg:w-[45%] xl:w-[42%] relative overflow-hidden brand-panel text-white flex-col justify-between p-12 xl:p-16">
            <div class="absolute inset-0 dot-grid opacity-40"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 panel-glow"></div>

            <div class="relative z-10">
                <a href="/" class="inline-block">
                    <img src="{{ asset('our-logo.png') }}" alt="Unova Saver Bank Corporation" class="h-9 w-auto brightness-0 invert">
                </a>
            </div>

            <div class="relative z-10 flex flex-col gap-10">
                <div>
                    <h1 class="text-4xl xl:text-[2.75rem] font-extrabold leading-[1.15] tracking-tight text-white">
                        Banking that moves<br>at your pace.
                    </h1>
                    <p class="mt-4 text-gray-400 text-base max-w-sm">
                        Sign in for secure transfers, real-time statements and full control of your Unova Saver account.
                    </p>
                </div>

                <!-- Card graphic -->
                <div class="bank-card relative w-full max-w-xs h-44 rounded-2xl p-5 flex flex-col justify-between -rotate-2">
                    <div class="flex items-start justify-between">
                        <div class="card-chip w-9 h-7 rounded-md"></div>
                        <span class="text-white/80 text-xs font-semibold tracking-wider uppercase">Unova</span>
                    </div>
                    <div class="text-white text-lg tracking-[0.2em] font-medium">
                        •••• &nbsp; •••• &nbsp; •••• &nbsp; 4471
                    </div>
                    <div class="flex items-end justify-between text-white/85 text-xs">
                        <span class="tracking-wide">A. MEMBER</span>
                        <i data-lucide="wifi" class="h-4 w-4 rotate-90"></i>
                    </div>
                </div>
            </div>

            <div class="relative z-10 flex items-center text-gray-500 text-xs">
                <span class="inline-flex items-center gap-1.5"><i data-lucide="shield-check" class="h-3.5 w-3.5"></i> Bank-grade encryption</span>
                <span class="divider-dot"></span>
                <span class="inline-flex items-center gap-1.5"><i data-lucide="zap" class="h-3.5 w-3.5"></i> Instant transfers</span>
                <span class="divider-dot"></span>
                <span class="inline-flex items-center gap-1.5"><i data-lucide="headset" class="h-3.5 w-3.5"></i> 24/7 support</span>
            </div>
        </div>

        <!-- Right: Login form -->
        <div class="flex-1 flex items-center justify-center px-4 sm:px-6 py-12">
            <div class="w-full max-w-sm">

                <!-- Mobile brand -->
                <div class="lg:hidden text-center mb-8">
                    <a href="/">
                        <img src="{{ asset('our-logo.png') }}" alt="Unova Saver Bank Corporation" class="h-10 mx-auto">
                    </a>
                </div>

                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-900">Welcome back</h2>
                    <p class="mt-1.5 text-sm text-gray-500">Sign in to continue to your account</p>
                </div>

                <!-- Login Form -->
                <form class="form-horizontal" action="{{ route('login') }}" method="POST" id="login_form">
                    @csrf
                    @if (session('status'))
                    <div class="mb-5 text-sm rounded-lg border border-emerald-200 bg-emerald-50 text-emerald-700 px-3 py-2" role="alert">
                        {{ session('status') }}
                    </div>
                    @elseif (session('error'))
                    <div class="mb-5 text-sm rounded-lg border border-red-200 bg-red-50 text-red-700 px-3 py-2" role="alert">
                        {{ session('error') }}
                    </div>
                    @endif

                    <!-- Email -->
                    <div class="mb-5">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                        <div class="input-wrapper">
                            <div class="relative">
                                <div class="input-icon">
                                    <i data-lucide="mail" class="h-5 w-5"></i>
                                </div>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="name@email.com"
                                    required
                                    autocomplete="email">
                            </div>
                            @if ($errors->has('email'))
                            <span class="block mt-2 text-xs text-red-600">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-5">
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="{{route('password.request')}}" class="text-sm text-primary-600 hover:text-primary-700">
                                Forgot Password?
                            </a>
                        </div>
                        <div class="input-wrapper">
                            <div class="relative">
                                <div class="input-icon">
                                    <i data-lucide="lock" class="h-5 w-5"></i>
                                </div>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    class="w-full pl-10 pr-12 py-3 rounded-xl border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                    placeholder="••••••••"
                                    required
                                    autocomplete="current-password">
                                <button
                                    type="button"
                                    onclick="togglePasswordVisibility()"
                                    class="absolute inset-y-0 right-0 flex items-center pr-3 input-toggle">
                                    <i data-lucide="eye" id="show-password" class="h-5 w-5 text-gray-400"></i>
                                    <i data-lucide="eye-off" id="hide-password" class="h-5 w-5 text-gray-400 hidden"></i>
                                </button>
                            </div>
                            @if ($errors->has('password'))
                            <span class="block mt-2 text-xs text-red-600">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="mb-6">
                        <label class="inline-flex items-center">
                            <input
                                type="checkbox"
                                name="remember_me"
                                class="rounded border-gray-300 bg-white text-primary-600 shadow-sm focus:ring focus:ring-primary-200 focus:ring-opacity-50"
                                checked>
                            <span class="ml-2 text-sm text-gray-500">Stay signed in for 30 days</span>
                        </label>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col space-y-3">
                        <button
                            type="submit"
                            id="login_submit_btn"
                            class="w-full py-3 px-4 text-white font-medium rounded-xl shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out flex items-center justify-center hover:brightness-110"
                            style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                            <span id="btn-idle" class="flex items-center">
                                <i data-lucide="log-in" class="h-5 w-5 mr-2"></i>
                                Sign In
                            </span>
                            <span id="btn-loading" class="hidden flex items-center">
                                <svg class="animate-spin h-5 w-5 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                                Verifying&hellip;
                            </span>
                        </button>

                        <a
                            href="{{route('register')}}"
                            class="w-full py-3 px-4 bg-white hover:bg-gray-50 border border-gray-300 text-gray-700 font-medium rounded-xl transition duration-150 ease-in-out flex items-center justify-center">
                            <i data-lucide="user-plus" class="h-5 w-5 mr-2"></i>
                            Not enrolled? Create Account
                        </a>
                    </div>
                </form>

                <!-- Additional Links -->
                <div class="mt-8 text-center">
                    <p class="text-xs text-gray-500">
                        By signing in, you agree to our
                        <a href="#" class="text-gray-600 hover:text-gray-900">Terms of Service</a> and
                        <a href="#" class="text-gray-600 hover:text-gray-900">Privacy Policy</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

    <!-- Enhanced Page Loading Animation -->
    <script>
        window.onload = function() {
            const preloader = document.querySelector('.page-loading');

            // Add a slight delay to make loading animation more noticeable
            setTimeout(function() {
                preloader.classList.remove('active');
                setTimeout(function() {
                    preloader.remove();
                }, 500);
            }, 800);
        };
    </script>
    <script>
        document.getElementById('login_form').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            const submitBtn = document.getElementById('login_submit_btn');
            const btnIdle    = document.getElementById('btn-idle');
            const btnLoading = document.getElementById('btn-loading');

            // Show spinner
            submitBtn.disabled = true;
            btnIdle.classList.add('hidden');
            btnLoading.classList.remove('hidden');

            fetch('{{ route("login.custom") }}', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: formData,
            })
            .then(res => res.json())
            .then(data => {
                if (data.content === 'Successful') {
                    window.location.href = data.redirect;
                } else {
                    const errorDiv = form.querySelector('.login-error') || (() => {
                        const d = document.createElement('div');
                        d.className = 'login-error mb-4 text-sm text-red-600 bg-red-50 border border-red-200 rounded-lg p-3';
                        form.prepend(d);
                        return d;
                    })();
                    errorDiv.textContent = data.message;
                    // Restore button
                    submitBtn.disabled = false;
                    btnIdle.classList.remove('hidden');
                    btnLoading.classList.add('hidden');
                }
            })
            .catch(() => {
                submitBtn.disabled = false;
                btnIdle.classList.remove('hidden');
                btnLoading.classList.add('hidden');
            });
        });
    </script>

    <!-- Tidio Chat -->

    <!-- Additional Scripts -->
    <script>
    function togglePasswordVisibility() {
        const passwordInput = document.getElementById('password');
        const showPasswordIcon = document.getElementById('show-password');
        const hidePasswordIcon = document.getElementById('hide-password');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            showPasswordIcon.classList.add('hidden');
            hidePasswordIcon.classList.remove('hidden');
        } else {
            passwordInput.type = 'password';
            showPasswordIcon.classList.remove('hidden');
            hidePasswordIcon.classList.add('hidden');
        }
    }
</script>


                       <div class="gtranslate_wrapper"></div> <script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"pt":"brazil","es":"colombia","fr":"quebec"}}</script> <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</body>
</html>
