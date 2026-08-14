@include('admin.header', ['title' => 'Dashboard'])
@include('admin.navbar')
<!-- Sidebar wrapper end -->
<div class="container-fluid py-4">
  <!-- Welcome banner -->
  <div class="welcome-banner rounded-4 p-4 p-md-5 mb-4 text-white position-relative overflow-hidden">
    <div class="position-relative d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center gap-3">
      <div>
        <h1 class="h3 mb-1 fw-bold">Welcome back, {{ explode(' ', optional(auth('admin')->user())->name ?? 'Admin')[0] }}</h1>
        <p class="mb-0 opacity-75 small">Here's what's happening across Unova Saver Bank today.</p>
      </div>
      <a href="{{ route('admin.manage.users') }}" class="btn btn-light fw-semibold flex-shrink-0">
        <i class="bi bi-people-fill me-1"></i>
        <span class="d-none d-sm-inline">Manage</span> Users
      </a>
    </div>
  </div>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show mt-2 mx-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show mt-2 mx-3" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

  <!-- Summary Cards - Properly arranged in 3 columns on laptop, stacked on mobile -->
  <div class="row g-3 mb-4">
    @php
      $stats = [
        ['label' => 'Total Users', 'value' => $totalUsers, 'icon' => 'bi-people-fill', 'color' => 'primary', 'href' => route('admin.manage.users')],
        ['label' => 'Total Deposits', 'value' => $totalDeposits, 'icon' => 'bi-cash-stack', 'color' => 'success', 'href' => null],
        ['label' => 'Total Loans', 'value' => $totalLoans, 'icon' => 'bi-bank', 'color' => 'info', 'href' => route('admin.user.loans')],
        ['label' => 'Total Transactions', 'value' => $totalTransactions, 'icon' => 'bi-arrow-left-right', 'color' => 'warning', 'href' => route('admin.user.transaction')],
        ['label' => 'Total Investments', 'value' => $totalTrades, 'icon' => 'bi-graph-up', 'color' => 'purple', 'href' => route('admin.user.investment')],
        ['label' => 'Total Cards', 'value' => $totalCards, 'icon' => 'bi-credit-card', 'color' => 'dark', 'href' => route('admin.user.cards')],
      ];
    @endphp
    @foreach($stats as $stat)
    <div class="col-12 col-md-6 col-lg-4">
      <div class="card stat-card h-100 border-0 shadow-sm position-relative">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-center">
            <div>
              <h6 class="text-muted mb-2">{{ $stat['label'] }}</h6>
              <h3 class="mb-0">{{ number_format($stat['value']) }}</h3>
            </div>
            <div class="bg-{{ $stat['color'] }} bg-opacity-10 p-3 rounded">
              <i class="bi {{ $stat['icon'] }} text-{{ $stat['color'] }} fs-4"></i>
            </div>
          </div>
        </div>
        @if($stat['href'])
        <a href="{{ $stat['href'] }}" class="stretched-link" aria-label="View {{ $stat['label'] }}"></a>
        @endif
      </div>
    </div>
    @endforeach
  </div>

  <!-- User Management Section -->
  <div class="row">
    <div class="col-12">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-white border-bottom-0 py-3">
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">
            <div>
              <h5 class="mb-1">
                <i class="bi bi-people-fill me-2"></i> User Management
              </h5>
              <p class="text-muted mb-0 small">Manage all registered users</p>
            </div>
        </div>
        
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-hover align-middle mb-0 table-card-collapse">
              <thead class="table-light">
                <tr>
                  <th class="ps-4">User</th>
                  <th>Registration</th>
                  <th>Status</th>
                  <th>Verification</th>
                  <th class="text-end pe-4">Actions</th>
                </tr>
              </thead>
              <tbody>
                @foreach($result as $user)
                <tr>
                  <td class="ps-4">
                    <div class="d-flex align-items-center">
                      <div class="avatar-thumb me-3">
                        <img src="{{ $user->display_picture ? asset('uploads/display/'.$user->display_picture) : asset('assets/images/avatar.jpg') }}" class="rounded-circle" width="40" height="40" alt="User">
                      </div>
                      <div>
                        <h6 class="mb-0">{{ $user->first_name }} {{ $user->last_name ?? '' }}</h6>
                        <small class="text-muted">{{ $user->email }}</small>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex flex-column">
                      <span>{{ \Carbon\Carbon::parse($user->created_at)->format('M j, Y') }}</span>
                      <small class="text-muted">{{ \Carbon\Carbon::parse($user->created_at)->format('g:i A') }}</small>
                    </div>
                  </td>
                  <td>
                    @if($user->user_status == 1)
                    <span class="badge bg-success bg-opacity-10 text-success">
                      <i class="bi bi-check-circle me-1"></i> Active
                    </span>
                    @else
                    <span class="badge bg-danger bg-opacity-10 text-danger">
                      <i class="bi bi-x-circle me-1"></i> Inactive
                    </span>
                    @endif
                  </td>
                  <td>
                    @if($user->email_verified_at)
                    <span class="badge bg-primary bg-opacity-10 text-primary">
                      <i class="bi bi-shield-check me-1"></i> Verified
                    </span>
                    @else
                    <span class="badge bg-secondary bg-opacity-10 text-secondary">
                      <i class="bi bi-shield-exclamation me-1"></i> Unverified
                    </span>
                    @endif
                  </td>
                  <td class="text-end pe-4">
                    <div class="d-flex justify-content-end gap-2">
                      <a href="{{ route('admin.profile', $user->id) }}" class="btn btn-sm btn-outline-primary rounded-circle" style="width: 32px; height: 32px;" data-bs-toggle="tooltip" title="View Profile">
                        <i class="bi bi-eye"></i>
                      </a>
                      <a href="{{ route('admin.send-user-mail',$user->id) }}" class="btn btn-sm btn-outline-success rounded-circle" style="width: 32px; height: 32px;" data-bs-toggle="tooltip" title="Send Email">
                        <i class="bi bi-envelope"></i>
                      </a>
                      <form action="{{route('admin.delete', $user->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger rounded-circle" style="width: 32px; height: 32px;" data-bs-toggle="tooltip" title="Delete User" onclick="return confirm('Are you sure you want to delete this user?')">
                          <i class="bi bi-trash"></i>
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        
        <div class="card-footer bg-white border-top-0 py-3">
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
            <div class="text-muted small">
              Showing <span class="fw-bold">{{ $result->firstItem() }}</span> to <span class="fw-bold">{{ $result->lastItem() }}</span> of <span class="fw-bold">{{ $result->total() }}</span> entries
            </div>
            
            @if($result->hasPages())
            <nav aria-label="User pagination">
              <ul class="pagination pagination-sm mb-0">
                @if($result->onFirstPage())
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                @else
                <li class="page-item">
                  <a class="page-link" href="{{ $result->previousPageUrl() }}">Previous</a>
                </li>
                @endif

                @foreach($result->getUrlRange(1, $result->lastPage()) as $page => $url)
                <li class="page-item {{ $result->currentPage() == $page ? 'active' : '' }}">
                  <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                </li>
                @endforeach

                @if($result->hasMorePages())
                <li class="page-item">
                  <a class="page-link" href="{{ $result->nextPageUrl() }}">Next</a>
                </li>
                @else
                <li class="page-item disabled">
                  <span class="page-link">Next</span>
                </li>
                @endif
              </ul>
            </nav>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .welcome-banner {
    background: linear-gradient(120deg, var(--brand-ink-900) 0%, var(--brand-ink-700) 55%, var(--brand-primary-dark) 130%);
  }
</style>

	@include('admin.footer')