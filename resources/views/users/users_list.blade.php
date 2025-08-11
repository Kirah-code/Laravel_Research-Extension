<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>R&E</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="../assets/img/tup_logo.png" type="image/x-icon" />
    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: {
          families: ["Public Sans:300,400,500,600,700"]
        },
        custom: {
          families: ["Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons", ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function() {
          sessionStorage.fonts = true;
        },
      });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{url ('dashboard')}}" class="logo">
            <a href="{{ url('dashboard') }}" class="logo d-flex align-items-center">
              <img
                src="../assets/img/tup_logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="60"
                />
              <!-- New logo added here -->
              <img
                src="../assets/img/res.jpg"
                alt="Rande Logo"
                class="navbar-brand ms-2"
                height="60"
                />
            </a>
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
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
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
              <!-- Research Development -->
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Research Development</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li class="nav-item">
                      <a href="{{url('/dashboard/upload')}}">
                      <span class="sub-item">Upload</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('/dashboard/list')}}">
                      <span class="sub-item">Research List</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Extension -->
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
              <!-- User Registration -->
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="fa fa-user-circle-o"></i>
                  <p>User Registration</p>
                  <span class="caret"></span>
                </a>
                <div class="show" id="charts">
                  <ul class="nav nav-collapse">
                    <li class="nav-item">
                      <a href="{{url('dashboard/add_user')}}">
                      <span class="sub-item">Add User</span>
                      </a>
                    </li>
                    <li class="nav-item active">
                      <a href="{{url('dashboard/users')}}">
                      <span class="sub-item">User List</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- Organizational Chart (Moved Outside) -->
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#organizationalChart">
                  <i class="fas fa-building"></i>
                  <p>Organizational Chart</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="organizationalChart">
                  <ul class="nav nav-collapse">
                    <li class="nav-item">
                      <a href="{{url('/dashboard/division')}}">
                      <span class="sub-item">Research and Extension Division</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="../index.html" class="logo">
              <img src="../assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" />
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
          <nav
            class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
            >
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
                $notifications = Notification::latest()->take(4)->get();
                $unreadCount = Notification::where('read', false)->count();
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
                          <a href="#">
                            <div class="notif-icon notif-{{ $notif->type ?? 'info' }}">
                              <i class="fa fa-info-circle"></i>
                            </div>
                            <div class="notif-content">
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
         @foreach ($ongoingResearches as $research)
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
            <div class="page-header">
              <h3 class="fw-bold mb-3">User List</h3>
              <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                  <a href="{{url('/dashboard')}}">
                  <i class="icon-home"></i>
                  </a>
                </li>
                <li class="separator">
                  <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                  <a href="{{ url('dashboard/users') }}">List</a>
                </li>
              </ul>
            </div>
            @if (session('success')) 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif @if ($errors->any()) 
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <ul class="mb-0">
                @foreach ($errors->all() as $error) 
                <li>{{ $error }}</li>
                @endforeach 
              </ul>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif 
            <div class="card">
              <div class="card-header">
                <div class="card-title">Users List</div>
              </div>
              <div class="card-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                        <!-- Edit Button (Triggers Modal) -->
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#editUserModal{{ $user->id }}">Edit</button>
                        <!-- Delete Button -->
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                      </td>
                    </tr>
                    <!-- Modal for Editing User -->
                    <div class="modal fade" id="editUserModal{{ $user->id }}" tabindex="-1" aria-labelledby="editUserModalLabel{{ $user->id }}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="editUserModalLabel{{ $user->id }}">Edit User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <!-- Edit Form -->
                            <form action="{{ route('users.update', $user->id) }}" method="POST">
                              @csrf
                              @method('PUT')
                              <!-- Name Field -->
                              <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}">
                              </div>
                              <!-- Email Field -->
                              <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}">
                              </div>
                              <!-- Password Field -->
                              <div class="mb-3">
                                <label for="password" class="form-label">New Password (Optional)</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter new password">
                              </div>
                              <!-- Confirm Password Field -->
                              <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm New Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Custom template -->
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
      $(document).ready(function() {
        $('#searchInput').on('input', function() {
          let query = $(this).val();
      
          if (query.length < 2) {
            $('#searchResultsDropdown').hide().empty();
            return;
          }
      
          $.ajax({
            url: "{{ route('dashboard.liveSearch') }}",
            method: 'GET',
            data: { query: query },
            success: function(data) {
              let results = data.results;
      
              if (!results || results.length === 0) {
                $('#searchResultsDropdown').html('<div class="list-group-item">No results found.</div>').show();
                return;
              }
      
              let html = '';
              results.forEach(function(item) {
                if(item.type === 'research'){
                  // Use data-id only, no data-bs-toggle/target here
                  html += `<a href="#" class="list-group-item list-group-item-action search-result" data-id="${item.id}">${item.title}</a>`;
                } else {
                  html += `<div class="list-group-item">${item.title} (User)</div>`;
                }
              });
      
              $('#searchResultsDropdown').html(html).show();
            },
            error: function() {
              $('#searchResultsDropdown').html('<div class="list-group-item text-danger">Error fetching results.</div>').show();
            }
          });
        });
      
        // Click handler to open the modal manually
        $('#searchResultsDropdown').on('click', 'a.search-result', function(e) {
          e.preventDefault();
          let id = $(this).data('id');
          let modalSelector = `#researchModal${id}`;
          let modalElement = document.querySelector(modalSelector);
      
          if(modalElement) {
            let modal = new bootstrap.Modal(modalElement);
            modal.show();
      
            // Remove the dropdown once modal opens
            $('#searchResultsDropdown').hide();
          }
        });
      
        // Remove backdrop on modal hidden event to avoid dim blocking clicks
        // This listens to all research modals
        @foreach ($ongoingResearches as $research)
        $('#researchModal{{ $research->id }}').on('hidden.bs.modal', function () {
          $('.modal-backdrop').remove();
        });
        @endforeach
      
        // Hide dropdown when clicking outside search input or dropdown
        $(document).click(function(e) {
          if (!$(e.target).closest('#searchInput, #searchResultsDropdown').length) {
            $('#searchResultsDropdown').hide();
          }
        });
      });        
    </script>
  </body>
</html>