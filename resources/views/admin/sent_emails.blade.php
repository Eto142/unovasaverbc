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
                        <h4 class="mb-sm-0 font-size-15">Sent Emails <i class="bx bx-envelope"></i></h4>

                        <div class="page-title-right">
                            <a href="{{ route('admin.user.mail') }}" class="btn btn-outline-secondary btn-sm btn-rounded">
                                <i class="bi bi-pencil-square"></i> Send Mail
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card" style="border-top-left-radius:30px; border-top-right-radius:30px;">
                    <div class="card-body">

                        @if (session('status') || session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{ session('status') ?? session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <p class="card-title fs-4 fw-semibold mb-0">Sent Emails</p>

                            @if ($sentEmails->count())
                                <form action="{{ route('admin.sent.mails.clear') }}" method="POST"
                                      onsubmit="return confirm('Are you sure you want to permanently delete the entire sent email history? This cannot be undone.')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm btn-rounded">
                                        <i class="bi bi-trash"></i> Clear All
                                    </button>
                                </form>
                            @endif
                        </div>

                        <div class="table-responsive">
                            <table class="table custom-table align-middle">
                                <thead>
                                    <tr>
                                        <th>Attachment</th>
                                        <th>Recipient</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Sent At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($sentEmails as $email)
                                        <tr>
                                            <td>
                                                @if ($email->isImageAttachment())
                                                    <a href="{{ route('admin.sent.mails.attachment', $email->id) }}" target="_blank" rel="noopener">
                                                        <img src="{{ route('admin.sent.mails.attachment', $email->id) }}"
                                                             alt="{{ $email->attachment_name }}"
                                                             width="48" height="48"
                                                             style="width:48px;height:48px;object-fit:cover;border-radius:8px;border:1px solid #e5e7eb">
                                                    </a>
                                                @elseif ($email->hasAttachment())
                                                    <a href="{{ route('admin.sent.mails.attachment', $email->id) }}" class="badge shade-blue">
                                                        <i class="bi bi-paperclip"></i> {{ \Illuminate\Support\Str::limit($email->attachment_name, 20) }}
                                                    </a>
                                                @else
                                                    <span class="text-muted">&mdash;</span>
                                                @endif
                                            </td>
                                            <td>{{ $email->recipient }}</td>
                                            <td>{{ $email->subject }}</td>
                                            <td>{{ \Illuminate\Support\Str::limit($email->message, 60) }}</td>
                                            <td>{{ $email->created_at->format('D, M j, Y g:i A') }}</td>
                                            <td>
                                                <form action="{{ route('admin.sent.mails.destroy', $email->id) }}" method="POST"
                                                      onsubmit="return confirm('Delete this sent email record? This cannot be undone.')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" style="width: 32px; height: 32px;" title="Delete">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center text-muted py-4">No emails have been sent yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        {{ $sentEmails->links() }}

                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('admin.footer')
