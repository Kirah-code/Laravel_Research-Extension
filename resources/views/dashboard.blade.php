<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport"/>
    <link rel="icon" href="assets/img/tup_logo.png" type="image/x-icon"/>
    <script src="assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins.min.css" />
    <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="wrapper">
    <div class="sidebar" data-background-color="dark">
      <div class="sidebar-logo">
        <div class="logo-header" data-background-color="dark">
          <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
            <img
              src="assets/img/tup_logo.png"
              alt="navbar brand"
              class="navbar-brand"
              height="60"
              />
            <!-- New logo added here -->
            <img
              src="assets/img/res.jpg"
              alt="Rande Logo"
              class="navbar-brand ms-2"
              height="60"
              />
          </a>
          <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
            <i class="gg-menu-right"></i>
            </button>
            <button class="btn btn-toggle sidenav-toggler">
            <i class="gg-menu-left"></i>
            </button>
          </div>
          <button class="topbar-toggler more">
          <i class="gg-more-vertical-alt"></i>
          </button>
        </div>
      </div>
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <ul class="nav nav-secondary">
            <li class="nav-item active">
              <a href="{{url('/dashboard')}}">
                <i class="fas fa-home"></i>
                <p>Dashboard</p>
              </a>
            </li>
            <li class="nav-section">
              <span class="sidebar-mini-icon">
              <i class="fa fa-ellipsis-h"></i>
              </span>
              <h4 class="text-section"></h4>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#researchForms" aria-expanded="false" aria-controls="researchForms">
                <i class="fas fa-pen-square"></i>
                <p>Research Development</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="researchForms">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{ url('/dashboard/upload') }}">
                    <span class="sub-item">Upload</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/dashboard/list') }}">
                    <span class="sub-item">Research List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#extensionForms" aria-expanded="false" aria-controls="extensionForms">
                <i class="fas fa-upload"></i>
                <p>Extension</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="extensionForms">
                <ul class="nav nav-collapse">
                  <li>
                    <a href="{{ url('/dashboard/extension') }}">
                    <span class="sub-item">Upload</span>
                    </a>
                  </li>
                  <li>
                    <a href="{{ url('/dashboard/extension_list') }}">
                    <span class="sub-item">Research List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#charts">
                <i class="fa fa-user-circle-o"></i>
                <p>User Registration</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav nav-collapse">
                  <li class="nav-item">
                    <a href="{{url('dashboard/add_user')}}">
                    <span class="sub-item">Add User</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('dashboard/users')}}">
                    <span class="sub-item">User List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#researchExtension">
                <i class="fas fa-building"></i>
                <p>Organizational Chart</p>
                <span class="caret"></span>
              </a>
              <div class="collapse" id="researchExtension">
                <ul class="nav nav-collapse">
                  <li class="nav-item">
                    <a href="{{url('/dashboard/division')}}">
                    <span class="sub-item">Research and Extension Division</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <div class="main-header">
        <div class="main-header-logo">
          <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
            <img
              src="assets/img/kaiadmin/logo_light.svg"
              alt="navbar brand"
              class="navbar-brand"
              height="20"
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
              <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
              <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
            <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
          <div class="container-fluid">
            <nav
              class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
              >
              <form id="searchForm" action="javascript:void(0);">
                <div class="input-group position-relative">
                  <input type="text" id="searchInput" name="query" class="form-control" placeholder="Search ...">
                  <button type="submit" class="btn btn-search pe-1">
                  <i class="fa fa-search search-icon"></i>
                  </button>
                  <!-- Dropdown container for live results -->
                  <div id="searchResultsDropdown" class="list-group position-absolute w-100" style="z-index: 1050; top: 100%; left: 0; display:none;">
                    <!-- results will be appended here -->
                  </div>
                </div>
              </form>
              {{-- Put the modals here: --}}
            </nav>
            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
              <li
                class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                >
                <a
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  href="#"
                  role="button"
                  aria-expanded="false"
                  aria-haspopup="true"
                  >
                <i class="fa fa-search"></i>
                </a>
                <ul class="dropdown-menu dropdown-search animated fadeIn">
                  <form class="navbar-left navbar-form nav-search">
                    <div class="input-group">
                      <input
                        type="text"
                        placeholder="Search ..."
                        class="form-control"
                        />
                    </div>
                  </form>
                </ul>
              </li>
              @php
              use App\Models\Notification;
              $notifications = Notification::where('user_id', auth()->id())->latest()->take(4)->get();
              $unreadCount = Notification::where('user_id', auth()->id())->where('read', false)->count();
              @endphp
              <li class="nav-item topbar-icon dropdown hidden-caret">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="notifDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  >
                <i class="fa fa-bell"></i>
                @if($unreadCount > 0)
                @endif
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">
                      You have {{ $unreadCount }} new notification{{ $unreadCount != 1 ? 's' : '' }}
                    </div>
                  </li>
                  <li>
                    <div class="notif-scroll scrollbar-outer">
                      <div class="notif-center">
                        @forelse($notifications as $notif)
                        <a href="#" class="notification-item" data-id="{{ $notif->id }}">
                          <div class="notif-icon notif-{{ $notif->type ?? 'info' }} {{ $notif->read ? '' : 'unread' }}">
                            <i class="fa fa-info-circle"></i>
                          </div>
                          <div class="notif-content">
                            <span class="block">
                            <strong>{{ \Illuminate\Support\Str::limit($notif->title, 30) }}</strong>
                            </span>
                            <span class="block">
                            {{ \Illuminate\Support\Str::limit($notif->message, 50) }}
                            </span>
                            <span class="time">
                            {{ $notif->created_at->diffForHumans() }}
                            </span>
                          </div>
                        </a>
                        @empty
                        <span class="text-muted px-3">No notifications found.</span>
                        @endforelse
                      </div>
                    </div>
                  </li>
                  <li>
                    <a class="see-all" href="{{ route('researches.index') }}">
                    See all notifications <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item topbar-user dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#" aria-expanded="false">
                  <div class="avatar-sm d-flex align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 35px; height: 35px; font-weight: bold;">
                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                  </div>
                  <span class="profile-username">
                  <span class="yes">Hi,</span>
                  <span class="yes">{{ Auth::user()->name }}</span>
                  </span>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                  <div class="dropdown-user-scroll scrollbar-outer">
                    <li>
                      <div class="user-box text-center">
                        <div class="avatar-lg d-flex align-items-center justify-content-center mx-auto bg-primary text-white rounded-circle" style="width: 60px; height: 60px; font-size: 24px; font-weight: bold;">
                          {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                        </div>
                        <div class="u-text mt-2">
                          <h4>{{ Auth::user()->name }}</h4>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                      </form>
                    </li>
                  </div>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
      <div class="container">
        {{-- Research Search Modal --}}
        @foreach ($researches as $research)
          <div class="modal fade" id="researchModal{{ $research->id }}" tabindex="-1" aria-labelledby="researchModalLabel{{ $research->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              {{-- modal-xl for wider modal --}}
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="researchModalLabel{{ $research->id }}">
                    📘 {{ $research->title }} - Details
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <strong>Proponents:</strong> {{ $research->proponents ?? ($research->user->name ?? 'N/A') }}<br>
                    <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($research->start_date)->format('F d, Y') }}<br>
                    <strong>End Date:</strong> {{ \Carbon\Carbon::parse($research->end_date)->format('F d, Y') }}<br>
                    <strong>Status:</strong> {{ ucfirst($research->status) }}
                  </div>
                  <div class="mb-3">
                    <strong>Description:</strong>
                    <p class="text-muted">{{ $research->description }}</p>
                  </div>
                  @php
                  $links = [
                  'IMRAD' => $research->imrad_link,
                  'Research Contract' => $research->moa_link,
                  'MOU' => $research->mou_link,
                  'Year 1 Q1' => $research->year1_q1_link,
                  'Year 1 Q2' => $research->year1_q2_link,
                  'Year 1 Q3' => $research->year1_q3_link,
                  'Year 1 Q4' => $research->year1_q4_link,
                  'Year 2 Q1' => $research->year2_q1_link,
                  'Year 2 Q2' => $research->year2_q2_link,
                  'Year 2 Q3' => $research->year2_q3_link,
                  'Year 2 Q4' => $research->year2_q4_link,
                  'Year 3 Q1' => $research->year3_q1_link,
                  'Year 3 Q2' => $research->year3_q2_link,
                  'Year 3 Q3' => $research->year3_q3_link,
                  'Year 3 Q4' => $research->year3_q4_link,
                  ];
                  @endphp
                  <div class="row g-3">
                    {{-- Grid layout with 4 columns --}}
                    @foreach ($links as $label => $url)
                    @if (!empty($url))
                    @php
                    preg_match('/(?:\/d\/|id=|folders\/)([-\w]{25,})/', $url, $matches);
                    $fileId = $matches[1] ?? null;
                    $isFolder = str_contains($url, 'folders/');
                    $isFile = str_contains($url, '/file/') || str_contains($url, 'uc?export=download');
                    $downloadLink = $fileId ? "https://drive.google.com/uc?export=download&id={$fileId}" : null;
                    @endphp
                    <div class="col-md-3">
                      {{-- 4 columns on desktop --}}
                      <div class="border rounded p-3 h-100 shadow-sm">
                        <h6 class="fw-bold small mb-2">{{ $label }}</h6>
                        @if ($fileId)
                        <a href="{{ $downloadLink }}" class="btn btn-sm btn-success w-100 mb-2" target="_blank" download>
                        ⬇ Download ZIP
                        </a>
                        @else
                        <p class="text-danger small">Invalid Link</p>
                        @endif
                        @if ($isFolder && $fileId)
                        <iframe 
                          src="https://drive.google.com/embeddedfolderview?id={{ $fileId }}#grid" 
                          style="width: 100%; height: 150px; border: 1px solid #ccc;">
                        </iframe>
                        @endif
                      </div>
                    </div>
                    @endif
                    @endforeach
                  </div>
                  @if (empty(array_filter($links)))
                  <p class="text-muted mt-3">No document links provided.</p>
                  @endif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{-- Extension Search Modal --}}
          @foreach ( $extensions as $extension )
          <div class="modal fade" id="extensionModal{{ $extension->id }}" tabindex="-1" aria-labelledby="extensionModalLabel{{ $extension->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="extensionModalLabel{{ $extension->id }}">
                    🧩 {{ $extension->title }} - Details
                  </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  {{-- Project Information --}}
                  <div class="mb-3">
                    <strong>Proponents:</strong> {{ $extension->proponents ?? ($extension->user->name ?? 'N/A') }}<br>
                    <strong>Start Date:</strong> {{ \Carbon\Carbon::parse($extension->start_date)->format('F d, Y') }}<br>
                    <strong>End Date:</strong> {{ \Carbon\Carbon::parse($extension->end_date)->format('F d, Y') }}<br>
                    <strong>Status:</strong> {{ ucfirst($extension->status) }}
                  </div>
                  {{-- Description --}}
                  <div class="mb-3">
                    <strong>Description:</strong>
                    <p class="text-muted">{{ $extension->description ?? '-' }}</p>
                  </div>
                  {{-- Document Links --}}
                  @php
                  $links = [
                  'Terminal Report' => $extension->terminal_report,
                  'Research Contract' => $extension->moa,
                  'MOU' => $extension->mou,
                  ];
                  @endphp
                  <div class="row g-3">
                    @foreach ($links as $label => $url)
                    @if (!empty($url))
                    @php
                    preg_match('/(?:\/d\/|id=|folders\/)([-\w]{25,})/', $url, $matches);
                    $fileId = $matches[1] ?? null;
                    $isFolder = str_contains($url, 'folders/');
                    $downloadLink = $fileId ? "https://drive.google.com/uc?export=download&id={$fileId}" : null;
                    @endphp
                    <div class="col-md-4">
                      <div class="border rounded p-3 h-100 shadow-sm">
                        <h6 class="fw-bold small mb-2">{{ $label }}</h6>
                        @if ($fileId)
                        <a href="{{ $downloadLink }}" class="btn btn-sm btn-success w-100 mb-2" target="_blank" download>
                        ⬇ Download ZIP
                        </a>
                        @else
                        <p class="text-danger small">Invalid Link</p>
                        @endif
                        @if ($isFolder && $fileId)
                        <iframe 
                          src="https://drive.google.com/embeddedfolderview?id={{ $fileId }}#grid" 
                          style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px;">
                        </iframe>
                        @endif
                      </div>
                    </div>
                    @endif
                    @endforeach
                  </div>
                  @if (empty(array_filter($links)))
                  <p class="text-muted mt-3">No document links provided.</p>
                  @endif
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        <div class="page-inner">
          <div class="dashboard-section position-relative text-white" style="background-image: url('{{ asset('assets/img/dashboard-bg.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; border-radius: 15px; overflow: hidden; padding: 2rem;">
            <!-- Slideshow Dashboard Wrapper -->
            <div class="slideshow-wrapper my-4 rounded-4 overflow-hidden">
              <!-- Background Slideshow Images -->
              <div class="slideshow-bg">
                <div class="slide" style="background-image: url('{{ asset('assets/img/s1.jpg') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('assets/img/s2.jpg') }}');"></div>
                <div class="slide" style="background-image: url('{{ asset('assets/img/s3.jpg') }}');"></div>
              </div>
              <!-- Overlay -->
              <div class="overlay"></div>
              <!-- Dashboard Content -->
              <div class="dashboard-content p-4">
                <!-- Header -->
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                  <div>
                    <h3 class="fw-bold mb-3 text-white">Dashboard</h3>
                    <h6 class="fw-bold mb-3 text-white">Welcome back to admin panel!</h6>
                  </div>
                </div>
                <!-- end .row -->
              </div>
              <!-- end .dashboard-content -->
            </div>
            <!-- end .slideshow-wrapper -->
            <div class="row">
              <!-- Total Users -->
              <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card card-stats card-round shadow-lg">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Users</p>
                          <h4 class="card-title">
                            <button class="btn btn-link text-decoration-none p-0 fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#userListModal">
                            {{ $usersCount }}
                            </button>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="userListModal" tabindex="-1" aria-labelledby="userListModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="userListModalLabel">User List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered table-hover">
                          <thead class="table-light">
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($users as $user)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $user->name }}</td>
                              <td>{{ $user->email }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Researches -->
              <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card card-stats card-round shadow-lg">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                          <i class="fas fa-book"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Researches</p>
                          <h4 class="card-title">
                            <button class="btn btn-link text-decoration-none p-0 fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#researchListModal">
                            {{ $researchCount }}
                            </button>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="researchListModal" tabindex="-1" aria-labelledby="researchListModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="researchListModalLabel">Research List</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <table class="table table-bordered table-hover">
                            <thead class="table-light">
                              <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Created At</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($allResearches as $research)
                              <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $research->title }}</td>
                                <td>{{ ucfirst($research->status) }}</td>
                                <td>{{ $research->created_at->format('M d, Y') }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="extensionListModal" tabindex="-1" aria-labelledby="extensionListModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-xl modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="extensionListModalLabel">Extension List</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <table class="table table-bordered table-hover">
                          <thead class="table-light">
                            <tr>
                              <th>#</th>
                              <th>Title</th>
                              <th>Proponents</th>
                              <th>Status</th>
                              <th>Created At</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($extensions as $extension)
                            <tr>
                              <td>{{ $loop->iteration }}</td>
                              <td>{{ $extension->title }}</td>
                              <td>{{ $extension->proponents }}</td>
                              <td>{{ ucfirst($extension->status ?? 'N/A') }}</td>
                              <td>{{ $extension->created_at->format('M d, Y') }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Total Extensions -->
              <div class="col-12 col-sm-6 col-md-4 mb-4">
                <div class="card card-stats card-round shadow-lg">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                          <i class="fas fa-handshake"></i>
                        </div>
                      </div>
                      <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                          <p class="card-category">Total Extensions</p>
                          <h4 class="card-title">
                            <button class="btn btn-link text-decoration-none p-0 fw-bold text-dark" data-bs-toggle="modal" data-bs-target="#extensionListModal">
                            {{ $extensionCount }}
                            </button>
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Ongoing Researches</div>
                    <div class="card-tools">
                      <div class="dropdown">
                        <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ url('dashboard/list') }}">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col" class="text-end">Author</th>
                          <th scope="col" class="text-end">Date</th>
                          <th scope="col" class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($ongoingResearches as $research)
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-info btn-sm me-2">
                            <i class="fas fa-spinner"></i>
                            </button>
                            {{ $research->title }}
                          </th>
                          <td class="text-end">{{ $research->proponents ?? 'Unknown' }}</td>
                          <td class="text-end">{{ \Carbon\Carbon::parse($research->created_at)->toFormattedDateString() }}</td>
                          <td class="text-end">
                            <span class="badge badge-info text-capitalize">{{ $research->status ?? 'Ongoing' }}</span>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="4" class="text-center text-muted">No ongoing researches found.</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Extension Researches</div>
                    <div class="card-tools">
                      <div class="dropdown">
                        <button class="btn btn-icon btn-clean me-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="{{ url('dashboard/extension_list') }}">View All</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col" class="text-end">Author</th>
                          <th scope="col" class="text-end">Date</th>
                          <th scope="col" class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($extensions as $extension)
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-info btn-sm me-2">
                            <i class="fas fa-spinner"></i>
                            </button>
                            {{ $extension->title }}
                          </th>
                          <td class="text-end">{{ $extension->proponents ?? 'Unknown' }}</td>
                          <td class="text-end">{{ \Carbon\Carbon::parse($extension->created_at)->toFormattedDateString() }}</td>
                          <td class="text-end">
                            <span class="badge badge-info text-capitalize">{{ $extension->status ?? 'Ongoing' }}</span>
                          </td>
                        </tr>
                        @empty
                        <tr>
                          <td colspan="4" class="text-center text-muted">No ongoing extension found.</td>
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Completed Researches</div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col" class="text-end">Author</th>
                          <th scope="col" class="text-end">Date</th>
                          <th scope="col" class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($completedResearches as $research)
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                            <i class="fa fa-check"></i>
                            </button>
                            {{ $research->title }}
                          </th>
                          <td class="text-end">{{ $research->proponents ?? 'N/A' }}</td>
                          <td class="text-end">{{ \Carbon\Carbon::parse($research->created_at)->toFormattedDateString() }}</td>
                          <td class="text-end">
                            <span class="badge badge-success text-capitalize">{{ $research->status }}</span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-round">
                <div class="card-header">
                  <div class="card-head-row card-tools-still-right">
                    <div class="card-title">Completed Extension</div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Title</th>
                          <th scope="col" class="text-end">Author</th>
                          <th scope="col" class="text-end">Date</th>
                          <th scope="col" class="text-end">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($completedExtensions as $extension)
                        <tr>
                          <th scope="row">
                            <button class="btn btn-icon btn-round btn-success btn-sm me-2">
                            <i class="fa fa-check"></i>
                            </button>
                            {{ $extension->title }}
                          </th>
                          <td class="text-end">{{ $extension->proponents ?? 'N/A' }}</td>
                          <td class="text-end">{{ \Carbon\Carbon::parse($extension->created_at)->toFormattedDateString() }}</td>
                          <td class="text-end">
                            <span class="badge badge-success text-capitalize">{{ $extension->status }}</span>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>
    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Bootstrap Notify -->
    <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>
    <!-- Google Maps Plugin -->
    <script src="../assets/js/plugin/gmaps/gmaps.js"></script>
    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <script>
      $(document).ready(function () {
          const $searchInput = $('#searchInput');
          const $searchResultsDropdown = $('#searchResultsDropdown');
      
          // Handle input for live search
          $searchInput.on('input', function () {
              const query = $searchInput.val().trim();
      
              if (query.length < 2) {
                  $searchResultsDropdown.hide().empty();
                  return;
              }
      
              $.ajax({
                  url: "{{ route('dashboard.liveSearch') }}",
                  method: 'GET',
                  data: { query: query },
                  success: function (data) {
                      const results = data.results;
      
                      if (!results || results.length === 0) {
                          $searchResultsDropdown.html('<div class="list-group-item">No results found.</div>').show();
                          return;
                      }
      
                      let html = '';
                      results.forEach(function (item) {
                          let label = '';
                          if (item.type === 'research') {
                              label = `<strong>Research:</strong> ${item.title}`;
                              html += `<a href="#" class="list-group-item list-group-item-action search-result" data-type="research" data-id="${item.id}">${label}</a>`;
                          } else if (item.type === 'extension') {
                              label = `<strong>Extension:</strong> ${item.title}<br><small>${item.proponents || ''}</small>`;
                              html += `<a href="#" class="list-group-item list-group-item-action search-result" data-type="extension" data-id="${item.id}">${label}</a>`;
                          } else if (item.type === 'user') {
                              label = `<strong>User:</strong> ${item.title}`;
                              html += `<div class="list-group-item">${label}</div>`;
                          }
                      });
      
                      $searchResultsDropdown.html(html).show();
                  },
                  error: function () {
                      $searchResultsDropdown.html('<div class="list-group-item text-danger">Error fetching results.</div>').show();
                  }
              });
          });
      
          // Open modals for research or extension items
          $searchResultsDropdown.on('click', 'a.search-result', function (e) {
              e.preventDefault();
      
              const id = $(this).data('id');
              const type = $(this).data('type');
              let modalSelector = '';
      
              if (type === 'research') {
                  modalSelector = `#researchModal${id}`;
              } else if (type === 'extension') {
                  modalSelector = `#extensionModal${id}`;
              }
      
              const modalElement = document.querySelector(modalSelector);
              if (modalElement) {
                  const modal = new bootstrap.Modal(modalElement);
                  modal.show();
                  $searchInput.val('');
                  $searchResultsDropdown.hide();
              } else {
                  console.warn(`Modal with ID ${modalSelector} not found.`);
              }
          });
      
          // Hide dropdown if user clicks outside
          $(document).click(function (e) {
              if (!$(e.target).closest('#searchInput, #searchResultsDropdown').length) {
                  $searchResultsDropdown.hide();
              }
          });
      });
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const notifDropdown = document.getElementById('notifDropdown');
          const unreadBadge = document.getElementById('unreadBadge');
          const dropdownTitle = document.querySelector('.dropdown-title');
      
          if (!notifDropdown) {
              console.error('notifDropdown element not found');
              return;
          }
      
          notifDropdown.addEventListener('click', function (event) {
              event.preventDefault();
              console.log('Sending AJAX request to: {{ route('notifications.markAsRead') }}');
              
              fetch('{{ route('notifications.markAsRead') }}', {
                  method: 'POST',
                  headers: {
                      'X-CSRF-TOKEN': '{{ csrf_token() }}',
                      'Content-Type': 'application/json',
                      'Accept': 'application/json'
                  },
              })
              .then(response => {
                  console.log('Response Status:', response.status);
                  if (!response.ok) {
                      throw new Error(`HTTP error! Status: ${response.status}`);
                  }
                  return response.json();
              })
              .then(data => {
                  console.log('Response Data:', data);
                  if (data.success) {
                      console.log('Unread count after update:', data.unread_count);
                      if (unreadBadge) {
                          console.log('Removing unread badge');
                          unreadBadge.remove();
                      }
                      if (dropdownTitle) {
                          console.log('Updating dropdown title');
                          dropdownTitle.textContent = 'You have 0 new notifications';
                      }
                      document.querySelectorAll('.notif-icon.unread').forEach(icon => {
                          console.log('Removing unread class from icon');
                          icon.classList.remove('unread');
                      });
                  } else {
                      console.error('Mark as read failed:', data.error);
                  }
              })s
              .catch(error => {
                  console.error('Fetch Error:', error);
              });s
          });
      });
    </script>
  </body>
</html>