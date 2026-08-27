    <!-- partial -->
    <!-- Main container start -->
      <div class="main-container">

        <!-- Sidebar wrapper start -->
        <nav class="sidebar-wrapper">

          <!-- Sidebar brand starts -->
          <div class="brand">
            <a href="{{route('admin.dashboard')}}" class="logo">
              <img src="{{asset('our-logo.png')}}" class="d-none d-md-block me-4" alt="Unova Saver Bank Corporation" />
              <img src="{{asset('our-logo.png')}}" class="d-block d-md-none me-4" alt="Unova Saver Bank Corporation" />
            </a>
          </div>
          <!-- Sidebar brand ends -->

          <!-- Sidebar menu starts -->
          <div class="sidebar-menu">
            <div class="sidebarMenuScroll">
              <ul>
                <li class="{{ request()->routeIs('admin.dashboard') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.dashboard')}}">
                    <i class="bi bi-house"></i>
                    <span class="menu-text">Dashboard</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.wallet') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.wallet')}}">
                    <i class="bi bi-wallet2"></i>
                    <span class="menu-text">Update Wallet</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.manage.users') || request()->routeIs('admin.profile') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.manage.users')}}">
                    <i class="bi bi-people"></i>
                    <span class="menu-text"> Manage Users</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.user.loans') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.user.loans')}}">
                    <i class="bi bi-cash-stack"></i>
                    <span class="menu-text"> Manage Loans</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.user.investment') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.user.investment')}}">
                    <i class="bi bi-graph-up-arrow"></i>
                    <span class="menu-text">Investments</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.user.cards') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.user.cards')}}">
                    <i class="bi bi-credit-card"></i>
                    <span class="menu-text">Cards</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.user.transaction') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.user.transaction')}}">
                    <i class="bi bi-calendar4"></i>
                    <span class="menu-text">Manage Transactions</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.admin.change.password') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.admin.change.password')}}">
                    <i class="bi bi-key"></i>
                    <span class="menu-text">Change Password</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.user.mail') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.user.mail')}}">
                    <i class="bi bi-envelope"></i>
                    <span class="menu-text">Send Email</span>
                  </a>
                </li>

                <li class="{{ request()->routeIs('admin.sent.mails') ? 'active-page-link' : '' }}">
                  <a href="{{route('admin.sent.mails')}}">
                    <i class="bi bi-clock-history"></i>
                    <span class="menu-text">Sent Emails</span>
                  </a>
                </li>

                <li>
                  <a href="https://unovasaverbc.com/" target="_blank" rel="noopener">
                    <i class="bi bi-globe"></i>
                    <span class="menu-text">Visit Site</span>
                  </a>
                </li>

                <li>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('sidebar-logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="menu-text">Logout</span>
                  </a>
                  <form id="sidebar-logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </div>
          </div>
          <!-- Sidebar menu ends -->

        </nav>
        <!-- Sidebar wrapper end -->
                @if (session('error'))
                              <div class="alert box-bdr-red alert-dismissible fade show text-red" role="alert">
															<b>Error!</b>{{ session('error') }}
											<button type="button" class="btn-close" data-bs-dismiss="alert"
																aria-label="Close"></button>
									</div>
                                    @elseif (session('status'))
									<div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
															<b>Success!</b> {{ session('status') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
									    @elseif (session('message'))
									<div class="alert box-bdr-green alert-dismissible fade show text-green" role="alert">
															<b>Success!</b> {{ session('message') }}
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>
                                  @endif
