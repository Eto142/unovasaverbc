<!DOCTYPE html>
<html lang="en">
<head>
    <title>Verify Your Identity - Unova Saver Bank Corporation</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        .doc-option:has(input:checked) { border-color: #e51c24; background: #fff5f5; }
        .doc-option:has(input:checked) .doc-icon { color: #e51c24; }
        .preview-img { display: none; }
    </style>
</head>
<body class="font-sans bg-gray-50 text-gray-900 min-h-screen py-12 px-4">
    <div class="w-full max-w-xl mx-auto">

        <div class="bg-white rounded-2xl border border-gray-200 shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="relative overflow-hidden text-center px-8 pt-9 pb-8" style="background: radial-gradient(120% 140% at 0% 0%, #1c1f27 0%, #0b0c10 55%, #0b0c10 100%);">
                <img src="{{ asset('our-logo.png') }}" alt="Logo" class="h-9 mx-auto mb-4 brightness-0 invert">
                <h1 class="text-white font-bold text-lg">Identity Verification</h1>
                <p class="text-gray-400 text-sm mt-1.5">Upload a valid government-issued ID to activate your account</p>
            </div>

            <div class="px-8 py-8">
                <div class="inline-flex items-center gap-2 bg-fuchsia-50 text-fuchsia-700 rounded-full px-3.5 py-1.5 text-xs font-semibold mb-6">
                    <i data-lucide="shield-check" class="h-3.5 w-3.5"></i> Step 2 of 2 &mdash; ID Verification
                </div>

                @if(session('error'))
                    <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">{{ session('error') }}</div>
                @endif
                @if($errors->any())
                    <div class="mb-4 p-3 bg-red-50 border border-red-200 text-red-700 text-sm rounded-lg">
                        <ul class="list-disc pl-4 space-y-0.5">
                            @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('kyc.upload.submit') }}" method="POST" enctype="multipart/form-data" id="kycForm">
                    @csrf

                    <p class="font-semibold text-gray-900 mb-3 text-sm">Select document type</p>

                    <div class="flex flex-col gap-3 mb-6">
                        <label for="dt_passport" class="doc-option flex items-center gap-4 border-2 border-gray-200 rounded-xl px-5 py-4 cursor-pointer transition duration-150">
                            <input type="radio" name="document_type" id="dt_passport" value="passport" class="h-4 w-4 text-primary-600" required>
                            <i data-lucide="book-marked" class="doc-icon h-6 w-6 text-gray-400"></i>
                            <div>
                                <p class="font-semibold text-sm text-gray-900">Passport</p>
                                <p class="text-xs text-gray-500">International passport (bio-data page)</p>
                            </div>
                        </label>

                        <label for="dt_driver" class="doc-option flex items-center gap-4 border-2 border-gray-200 rounded-xl px-5 py-4 cursor-pointer transition duration-150">
                            <input type="radio" name="document_type" id="dt_driver" value="driver_license" class="h-4 w-4 text-primary-600">
                            <i data-lucide="id-card" class="doc-icon h-6 w-6 text-gray-400"></i>
                            <div>
                                <p class="font-semibold text-sm text-gray-900">Driver's License</p>
                                <p class="text-xs text-gray-500">Front and back of your driving licence</p>
                            </div>
                        </label>
                    </div>

                    <!-- Front -->
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Front of document <span class="text-red-600">*</span></label>
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer transition duration-150 bg-gray-50 hover:border-primary-500 hover:bg-red-50"
                             id="frontArea" onclick="document.getElementById('document_front').click()">
                            <i data-lucide="upload-cloud" class="h-8 w-8 text-gray-400 mx-auto mb-2"></i>
                            <span id="frontLabel" class="text-sm text-gray-500">Click to upload (JPG, PNG or PDF &middot; max 4 MB)</span>
                            <img id="frontPreview" class="preview-img max-h-32 rounded-lg mt-2 mx-auto" alt="preview">
                            <input type="file" id="document_front" name="document_front" accept=".jpg,.jpeg,.png,.pdf" required
                                   class="hidden" onchange="previewFile(this,'frontPreview','frontLabel')">
                        </div>
                    </div>

                    <!-- Back (for driver's licence) -->
                    <div class="mb-6 hidden" id="backSection">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Back of document <span class="text-gray-400 font-normal">(optional)</span></label>
                        <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer transition duration-150 bg-gray-50 hover:border-primary-500 hover:bg-red-50"
                             id="backArea" onclick="document.getElementById('document_back').click()">
                            <i data-lucide="upload-cloud" class="h-8 w-8 text-gray-400 mx-auto mb-2"></i>
                            <span id="backLabel" class="text-sm text-gray-500">Click to upload (JPG, PNG or PDF &middot; max 4 MB)</span>
                            <img id="backPreview" class="preview-img max-h-32 rounded-lg mt-2 mx-auto" alt="preview">
                            <input type="file" id="document_back" name="document_back" accept=".jpg,.jpeg,.png,.pdf"
                                   class="hidden" onchange="previewFile(this,'backPreview','backLabel')">
                        </div>
                    </div>

                    <div class="flex items-start gap-2.5 bg-amber-50 border border-amber-200 rounded-xl px-4 py-3.5 mb-6">
                        <i data-lucide="info" class="h-4 w-4 text-amber-600 mt-0.5 flex-shrink-0"></i>
                        <p class="text-sm text-amber-800">
                            Make sure the document is <strong>clear, uncut and unexpired</strong>.
                            Your information is encrypted and kept private.
                        </p>
                    </div>

                    <button type="submit"
                        class="w-full py-3 px-4 text-white font-semibold rounded-xl shadow-lg shadow-primary-900/20 transition duration-150 ease-in-out flex items-center justify-center hover:brightness-110"
                        style="background: linear-gradient(90deg, #e51c24, #AC39D4);">
                        <i data-lucide="send" class="h-4 w-4 mr-2"></i> Submit for Review
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>lucide.createIcons();</script>
    <script>
        // Show/hide back-of-document section for driver's licence
        document.querySelectorAll('input[name="document_type"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.getElementById('backSection').classList.toggle('hidden', this.value !== 'driver_license');
            });
        });

        // Image preview helper
        function previewFile(input, previewId, labelId) {
            var file = input.files[0];
            if (!file) return;
            document.getElementById(labelId).textContent = file.name;
            if (file.type.startsWith('image/')) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var img = document.getElementById(previewId);
                    img.src = e.target.result;
                    img.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
