<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Meta -->
    <meta name="description" content="Unova Saver Bank Corporation — Admin Dashboard" />
    <meta name="author" content="Unova Saver Bank Corporation" />
    <meta name="robots" content="noindex, nofollow" />
    <link rel="icon" href="{{ asset('logo.png') }}" />
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}" />

    <!-- Title -->
    <title>{{ $title ?? 'Admin Dashboard' }} · Unova Saver Bank Corporation</title>

    <!-- *************
      ************ Common Css Files *************
    ************ -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />

    <!-- Bootstrap font icons css -->
    <link rel="stylesheet" href="{{asset('admin/assets/fonts/bootstrap/bootstrap-icons.css')}}" />

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.min.css')}}" />

    <!-- Lato font (matches unovasaverbc.com brand) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    <!-- Unova brand overrides -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/brand-theme.css')}}" />

    <!-- *************
      ************ Vendor Css Files *************
    ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/overlay-scroll/OverlayScrollbars.min.css')}}" />
  </head>

  <body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- Page header starts -->
      <div class="page-header">

        <div class="toggle-sidebar" id="toggle-sidebar">
          <i class="bi bi-list"></i>
        </div>

        <!-- Header actions ccontainer start -->
        <div class="header-actions-container">

          <!-- Header profile start -->
          <div class="header-profile d-flex align-items-center">
            <div class="dropdown">
              <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                <span class="user-name d-none d-md-block">{{ optional(auth('admin')->user())->name ?? 'Admin' }}</span>
                <span class="avatar">
                  <img src="{{asset('admin/assets/images/admin-avatar.svg')}}" alt="Admin" />
                  <span class="status online"></span>
                </span>
              </a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                <div class="header-profile-actions">
                  <a href="{{ route('admin.admin.change.password') }}">
                    <i class="bi bi-key"></i>
                    <span class="menu-text">Change Password</span>
                  </a>
                  <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bi bi-box-arrow-right"></i>
                    <span class="menu-text">Logout</span>
                  </a>
                  <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Header profile end -->

        </div>
        <!-- Header actions ccontainer end -->

      </div>
      <!-- Page header ends -->