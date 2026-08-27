@include('admin.header')
@include('admin.navbar')
<!-- Left Sidebar End -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-15">Send Mail <i class="bx bx-transfer">
                            </i> </h4>

                        <div class="page-title-right">
                            <a href="{{ route('admin.sent.mails') }}" class="btn btn-outline-secondary btn-sm btn-rounded">
                                <i class="bi bi-clock-history"></i> Sent Emails
                            </a>
                        </div>
                    </div>
                </div>
            </div>

           <div class="col-xl-12">
    <div class="card" style="border-top-left-radius:30px; border-top-right-radius:30px;">
        <div class="card-body">
            <center><p class="card-title fs-4 fw-semibold">Send Mail</p></center>

            {{-- Alert Messages --}}
            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Error!</strong> {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @elseif (session('status') || session('message'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <strong>Success!</strong> {{ session('status') ?? session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <strong>Error!</strong>
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form action="{{ route('admin.send.mail.send') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Email*</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" required placeholder="Enter recipient email" value="{{ old('email', $prefillEmail ?? '') }}">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Subject*</label>
                    <div class="col-sm-9">
                        <input type="text" name="subject" class="form-control" required placeholder="Enter email subject" value="{{ old('subject') }}">
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label">Message*</label>
                    <div class="col-sm-9">
                        <textarea name="message" rows="5" class="form-control" required placeholder="Enter your message">{{ old('message') }}</textarea>
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="col-sm-3 col-form-label">Attachment</label>
                    <div class="col-sm-9">
                        <input type="file" name="attachment" class="form-control">
                        <small class="text-muted">Optional. Max 10MB. Images are embedded inline in the email; other files are sent as a normal attachment.</small>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary btn-rounded px-4">
                            Send Mail
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

                    </div>
                </div>
            </div>

            @include('admin.footer')
