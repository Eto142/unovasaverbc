<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corporate Registration - Unova Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Unova Saver Bank Corporation">
    <meta name="application-name" content="Unova Saver Bank Corporation">
    <meta name="description" content="Swift and Secure Money Transfer to any UK bank account will become a breeze with Unova Saver Bank Corporation.">
    <link rel="shortcut icon" href="{{ asset('our-logo.png') }}" type="image/png">


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
        document.documentElement.style.setProperty('--bg-color', '#f9fafb');
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

        /* --- Brand panel (left), shared visual language with login --- */
        .brand-panel {
            background: radial-gradient(120% 140% at 0% 0%, #1c1f27 0%, #0b0c10 55%, #0b0c10 100%);
        }

        .dot-grid {
            background-image: radial-gradient(rgba(255,255,255,0.08) 1px, transparent 1px);
            background-size: 24px 24px;
        }

        .panel-glow {
            background: radial-gradient(60% 60% at 50% 40%, rgba(172,57,212,0.28), transparent 70%);
            filter: blur(10px);
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
<link rel="icon" sizes="512x512" href="{{ asset('our-logo.png') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Unova Saver Bank Corporation">
<link rel="apple-touch-icon" href="{{ asset('our-logo.png') }}">


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
        <div class="hidden lg:flex lg:w-[34%] xl:w-[30%] relative overflow-hidden brand-panel text-white flex-col justify-between p-12">
            <div class="absolute inset-0 dot-grid opacity-40"></div>
            <div class="absolute -bottom-24 -left-24 w-96 h-96 panel-glow"></div>

            <div class="relative z-10">
                <a href="/" class="inline-block">
                    <img src="{{ asset('our-logo.png') }}" alt="Unova Saver Bank Corporation" class="h-9 w-auto brightness-0 invert">
                </a>
            </div>

            <div class="relative z-10">
                <h1 class="text-3xl font-extrabold leading-tight tracking-tight text-white mb-4">
                    Corporate banking<br>made simple.
                </h1>
                <p class="text-gray-400 text-sm mb-10 max-w-xs">
                    Open a corporate account to manage capital, process payroll and make bulk transfers.
                </p>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
                            <i data-lucide="shield" class="h-4 w-4 text-primary-400"></i>
                        </div>
                        <div>
                            <p class="text-white font-medium text-sm">Enterprise-grade security</p>
                            <p class="text-gray-500 text-xs mt-0.5">Industry-leading protocols keep business assets safe</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
                            <i data-lucide="zap" class="h-4 w-4 text-secondary-400"></i>
                        </div>
                        <div>
                            <p class="text-white font-medium text-sm">Bulk & instant transfers</p>
                            <p class="text-gray-500 text-xs mt-0.5">Process payroll and pay partners worldwide</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-9 h-9 rounded-lg bg-white/5 border border-white/10 flex items-center justify-center">
                            <i data-lucide="headset" class="h-4 w-4 text-primary-400"></i>
                        </div>
                        <div>
                            <p class="text-white font-medium text-sm">Dedicated support</p>
                            <p class="text-gray-500 text-xs mt-0.5">Fast access to corporate relationship managers</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative z-10 text-gray-500 text-xs">
                Already registered?
                <a href="{{ route('login') }}" class="text-white hover:text-primary-400 font-medium">Sign in instead</a>
            </div>
        </div>

        <!-- Right: Registration form -->
        <div class="flex-1 flex items-center justify-center px-4 sm:px-6 py-12">
            <div class="w-full max-w-2xl">

                <!-- Mobile Logo -->
                <div class="lg:hidden text-center mb-8">
                    <a href="/">
                        <img src="{{ asset('our-logo.png') }}" alt="Unova Saver Bank Corporation" class="h-10 mx-auto">
                    </a>
                </div>

                <!-- Registration Card -->
                <div x-data="{
                    step: 1,
                    totalSteps: 2,
                    formData: {
                        name: '',
                        last_name: '',
                        email: '',
                        address: '',
                        phone: '',
                        country: '',
                        account_type: '',
                        currency: '',
                        pin: '',
                        password: '',
                        password_confirmation: '',
                        terms: false
                    },
                    nextStep() {
                        if (this.validateCurrentStep()) {
                            if (this.step < this.totalSteps) {
                                this.step++;
                                window.scrollTo(0, 0);
                            }
                        }
                    },
                    prevStep() {
                        if (this.step > 1) {
                            this.step--;
                            window.scrollTo(0, 0);
                        }
                    },
                    validateCurrentStep() {
                        if (this.step === 1) {
                            return this.formData.name && this.formData.last_name && this.formData.email
                                && this.formData.address && this.formData.phone && this.formData.country
                                && this.formData.account_type && this.formData.pin;
                        } else if (this.step === 2) {
                            return this.formData.password && this.formData.password_confirmation && this.formData.terms;
                        }
                        return true;
                    },
                    get progress() {
                        return (this.step / this.totalSteps) * 100;
                    }
                }" class="relative bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">

                    <!-- Progress Header -->
                    <div class="px-8 py-6 border-b border-gray-100">
                        <div class="flex justify-between items-center mb-3">
                            <h2 class="text-2xl font-bold text-gray-900">Corporate Registration</h2>
                            <span class="text-sm font-medium text-gray-500">Step <span x-text="step"></span> of <span x-text="totalSteps"></span></span>
                        </div>

                        <!-- Progress Bar -->
                        <div class="h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-primary-600 to-secondary-500 rounded-full transition-all duration-300 ease-in-out" :style="'width: ' + progress + '%'"></div>
                        </div>

                        <!-- Step Titles -->
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <div :class="{ 'text-primary-600 font-medium': step >= 1 }">Business Setup</div>
                            <div :class="{ 'text-primary-600 font-medium': step >= 2 }">Security</div>
                        </div>
                    </div>

                    <!-- Form Container -->
                    <div class="px-8 py-6">
                        <form method="POST" action="{{route('register.custom')}}" id="regester" class="needs-validation" novalidate>
                            @csrf

                            <!-- Step 1: Business & Representative Information -->
                            <div x-show="step === 1" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                <div class="mb-6">
                                    <h3 class="text-lg font-medium text-gray-900">Tell us about your business</h3>
                                    <p class="mt-1 text-sm text-gray-500">We need your registered business details and authorized representative info.</p>
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <!-- Company Name -->
                                    <div>
                                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Company / Business Name *</label>
                                        <input
                                            type="text"
                                            id="name"
                                            name="first_name"
                                            x-model="formData.name"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Enter Registered Company Name"
                                            required>
                                        @if ($errors->has('first_name'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('first_name') }}</span>
                                        @endif
                                    </div>

                                    <!-- Representative Name -->
                                    <div>
                                        <label for="lastname" class="block text-sm font-medium text-gray-700 mb-2">Authorized Representative Name *</label>
                                        <input
                                            type="text"
                                            id="lastname"
                                            name="last_name"
                                            x-model="formData.last_name"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Enter Representative's Full Name"
                                            required>
                                        @if ($errors->has('last_name'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('last_name') }}</span>
                                        @endif
                                    </div>

                                    <!-- Email -->
                                    <div>
                                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Business Email Address *</label>
                                        <input
                                            type="email"
                                            id="email"
                                            name="email"
                                            x-model="formData.email"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Enter Business Email Address"
                                            required>
                                        @if ($errors->has('email'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <!-- Address -->
                                    <div>
                                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Corporate Address *</label>
                                        <input
                                            type="text"
                                            id="address"
                                            name="address"
                                            x-model="formData.address"
                                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                            placeholder="Enter Registered Business Address"
                                            required>
                                        @if ($errors->has('address'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('address') }}</span>
                                        @endif
                                    </div>

                                    <!-- Phone -->
                                    <div>
                                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Business Phone Number *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="phone" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <input
                                                type="tel"
                                                id="phone"
                                                name="phone"
                                                x-model="formData.phone"
                                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="+1 (234) 567-8901"
                                                required>
                                        </div>
                                        @if ($errors->has('phone'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('phone') }}</span>
                                        @endif
                                    </div>

                                    <!-- Country -->
                                    <div>
                                        <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country of Incorporation *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="globe" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <select
                                                id="country"
                                                name="country"
                                                x-model="formData.country"
                                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                                required>
                                                <option value="" disabled selected>Select country of incorporation</option>
                                                @include('auth.partials._country_options')
                                            </select>
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('country'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('country') }}</span>
                                        @endif
                                    </div>

                                    <!-- Account Type -->
                                    <div>
                                        <label for="account_type" class="block text-sm font-medium text-gray-700 mb-2">Corporate Account Type *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="building" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <select
                                                id="account_type"
                                                name="account_type"
                                                x-model="formData.account_type"
                                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                                required>
                                                <option value="" disabled selected>Select Corporate Account Type</option>
                                                <option value="Corporate Checking">Corporate Checking</option>
                                                <option value="Corporate Savings">Corporate Savings</option>
                                                <option value="Business Current">Business Current</option>
                                            </select>
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                        </div>
                                        @if ($errors->has('account_type'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('account_type') }}</span>
                                        @endif
                                    </div>

                                    <!-- Currency -->
                                    <div>
                                        <label for="currency" class="block text-sm font-medium text-gray-700 mb-2">Currency *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="banknote" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <select
                                                id="currency"
                                                name="currency"
                                                x-model="formData.currency"
                                                class="w-full pl-10 pr-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500 appearance-none"
                                                required>
                                                <option value="" disabled selected>Select currency</option>
                                                @include('auth.partials._currency_options')
                                            </select>
                                            <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="chevron-down" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Transaction PIN -->
                                    <div x-data="{ showPin: false }">
                                        <label for="pin" class="block text-sm font-medium text-gray-700 mb-2">Corporate Security PIN (4 digits) *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="key" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <input
                                                :type="showPin ? 'text' : 'password'"
                                                id="pin"
                                                name="account_pin"
                                                x-model="formData.pin"
                                                class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="••••"
                                                maxlength="4"
                                                pattern="[0-9]{4}"
                                                required>
                                            <button
                                                type="button"
                                                @click="showPin = !showPin"
                                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPin"></i>
                                                <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPin"></i>
                                            </button>
                                        </div>
                                        <p class="mt-1 text-xs text-gray-500">Required to authorize transactions</p>
                                        @if ($errors->has('account_pin'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('account_pin') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="flex justify-end">
                                    <button
                                        type="button"
                                        @click="nextStep()"
                                        class="inline-flex items-center px-5 py-3 rounded-xl font-medium text-white shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out hover:brightness-110"
                                        style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                                        Continue
                                        <i data-lucide="arrow-right" class="h-4 w-4 ml-2"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Step 2: Security -->
                            <div x-show="step === 2" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100">
                                <div class="mb-6">
                                    <h3 class="text-lg font-medium text-gray-900">Secure your account</h3>
                                    <p class="mt-1 text-sm text-gray-500">Create a strong password to protect your account.</p>
                                </div>

                                <div class="space-y-6 mb-6">
                                    <!-- Password -->
                                    <div x-data="{ showPassword: false }">
                                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Password *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <input
                                                :type="showPassword ? 'text' : 'password'"
                                                id="password"
                                                name="password"
                                                x-model="formData.password"
                                                class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="••••••••"
                                                required>
                                            <button
                                                type="button"
                                                @click="showPassword = !showPassword"
                                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPassword"></i>
                                                <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPassword"></i>
                                            </button>
                                        </div>
                                        @if ($errors->has('password'))
                                        <span class="block mt-1 text-xs text-red-600">{{ $errors->first('password') }}</span>
                                        @endif

                                        <!-- Password Strength Meter -->
                                        <div class="mt-2" x-data="{
                                            get strength() {
                                                let score = 0;
                                                if (formData.password.length > 7) score += 1;
                                                if (formData.password.length > 10) score += 1;
                                                if (/[A-Z]/.test(formData.password)) score += 1;
                                                if (/[0-9]/.test(formData.password)) score += 1;
                                                if (/[^A-Za-z0-9]/.test(formData.password)) score += 1;
                                                return score;
                                            },
                                            get strengthLabel() {
                                                const labels = ['Very Weak', 'Weak', 'Fair', 'Good', 'Strong', 'Very Strong'];
                                                return labels[this.strength] || 'Very Weak';
                                            },
                                            get strengthColor() {
                                                const colors = ['bg-red-500', 'bg-red-500', 'bg-yellow-500', 'bg-yellow-500', 'bg-green-500', 'bg-green-500'];
                                                return colors[this.strength] || 'bg-red-500';
                                            }
                                        }" x-show="formData.password.length > 0">
                                            <div class="flex justify-between items-center mb-1">
                                                <p class="text-xs text-gray-500">Password strength: <span x-text="strengthLabel" :class="{
                                                    'text-red-600': strength < 2,
                                                    'text-yellow-600': strength >= 2 && strength < 4,
                                                    'text-green-600': strength >= 4
                                                }"></span></p>
                                            </div>
                                            <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
                                                <div
                                                    class="h-full transition-all duration-300 ease-in-out"
                                                    :class="strengthColor"
                                                    :style="`width: ${(strength / 5) * 100}%`"></div>
                                            </div>
                                            <ul class="mt-2 space-y-1 text-xs text-gray-500">
                                                <li class="flex items-center" :class="{ 'text-green-600': formData.password.length > 7 }">
                                                    <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="formData.password.length > 7"></i>
                                                    <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="formData.password.length <= 7"></i>
                                                    At least 8 characters
                                                </li>
                                                <li class="flex items-center" :class="{ 'text-green-600': /[A-Z]/.test(formData.password) }">
                                                    <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[A-Z]/.test(formData.password)"></i>
                                                    <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[A-Z]/.test(formData.password)"></i>
                                                    At least one uppercase letter
                                                </li>
                                                <li class="flex items-center" :class="{ 'text-green-600': /[0-9]/.test(formData.password) }">
                                                    <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[0-9]/.test(formData.password)"></i>
                                                    <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[0-9]/.test(formData.password)"></i>
                                                    At least one number
                                                </li>
                                                <li class="flex items-center" :class="{ 'text-green-600': /[^A-Za-z0-9]/.test(formData.password) }">
                                                    <i data-lucide="check-circle" class="h-3 w-3 mr-1" x-show="/[^A-Za-z0-9]/.test(formData.password)"></i>
                                                    <i data-lucide="circle" class="h-3 w-3 mr-1" x-show="!/[^A-Za-z0-9]/.test(formData.password)"></i>
                                                    At least one special character
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div x-data="{ showPassword: false }">
                                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm Password *</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                                <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                                            </div>
                                            <input
                                                :type="showPassword ? 'text' : 'password'"
                                                id="password_confirmation"
                                                name="password_confirmation"
                                                x-model="formData.password_confirmation"
                                                class="w-full pl-10 pr-10 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500"
                                                placeholder="••••••••"
                                                required>
                                            <button
                                                type="button"
                                                @click="showPassword = !showPassword"
                                                class="absolute inset-y-0 right-0 flex items-center pr-3">
                                                <i data-lucide="eye" class="h-5 w-5 text-gray-400" x-show="!showPassword"></i>
                                                <i data-lucide="eye-off" class="h-5 w-5 text-gray-400" x-show="showPassword"></i>
                                            </button>
                                        </div>
                                        <p
                                            class="mt-1 text-sm"
                                            x-show="formData.password && formData.password_confirmation"
                                            :class="formData.password === formData.password_confirmation ? 'text-green-600' : 'text-red-600'">
                                            <span x-show="formData.password === formData.password_confirmation">
                                                <i data-lucide="check" class="inline h-3 w-3"></i> Passwords match
                                            </span>
                                            <span x-show="formData.password !== formData.password_confirmation">
                                                <i data-lucide="x" class="inline h-3 w-3"></i> Passwords do not match
                                            </span>
                                        </p>
                                    </div>

                                    <!-- Terms and Conditions -->
                                    <div>
                                        <label class="flex items-start">
                                            <input
                                                type="checkbox"
                                                id="terms"
                                                name="terms"
                                                x-model="formData.terms"
                                                class="rounded border-gray-300 text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 mt-1"
                                                required>
                                            <span class="ml-2 text-sm text-gray-600">
                                                I agree to the <a href="/terms" target="_blank" class="text-primary-600 hover:text-primary-500 underline">Terms of Service</a> and <a href="/privacy" target="_blank" class="text-primary-600 hover:text-primary-500 underline">Privacy Policy</a>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between">
                                    <button
                                        type="button"
                                        @click="prevStep()"
                                        class="inline-flex items-center px-5 py-3 rounded-xl font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50 transition duration-150 ease-in-out">
                                        <i data-lucide="arrow-left" class="h-4 w-4 mr-2"></i>
                                        Back
                                    </button>
                                    <button
                                        type="submit"
                                        :disabled="!validateCurrentStep()"
                                        :class="validateCurrentStep() ? 'hover:brightness-110' : 'opacity-50 cursor-not-allowed'"
                                        class="inline-flex items-center px-5 py-3 rounded-xl font-medium text-white shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out"
                                        style="background: linear-gradient(90deg, #e51c24, #a51c24);">
                                        <i data-lucide="check" class="h-4 w-4 mr-2"></i>
                                        Create Account
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Login Link -->
                <div class="text-center mt-6">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="text-primary-600 hover:text-primary-500 font-medium">
                            Sign in instead
                        </a>
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

    <!-- Tidio Chat -->

    <!-- Additional Scripts -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();

        // Restrict PIN to numbers only
        const pinInput = document.getElementById('pin');
        if (pinInput) {
            pinInput.addEventListener('keypress', function(event) {
                const charCode = (event.which) ? event.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                    event.preventDefault();
                    return false;
                }
                return true;
            });
        }
    });
</script>


                       <div class="gtranslate_wrapper"></div> <script>window.gtranslateSettings = {"default_language":"en","detect_browser_language":true,"wrapper_selector":".gtranslate_wrapper","switcher_horizontal_position":"right","switcher_vertical_position":"top","alt_flags":{"pt":"brazil","es":"colombia","fr":"quebec"}}</script> <script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
</body>
</html>
