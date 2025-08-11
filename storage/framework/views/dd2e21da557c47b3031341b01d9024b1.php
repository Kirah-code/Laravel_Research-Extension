<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Welcome</title>
    <link
      rel="icon"
      href="assets/img/tup_logo.png"
      type="image/x-icon"
      />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="landing_page/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="landing_page/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="landing_page/css/responsive.css">
    <!-- Bootstrap JS and Popper.js -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- fevicon -->
    <link rel="icon" href="landing_page/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="landing_page/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="landing_page/css/owl.carousel.min.css">
    <link rel="stylesheet" href="landing_page/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-light bg-light justify-content-between px-3">
        <!-- Side Navigation Toggle -->
        <div id="mySidenav" class="sidenav">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
          <a href="#home">Home</a>
          <a href="#library">Library</a>
          <a href="#rande">Research and Extension Division</a>
        </div>
        <!-- Toggle Icon -->
        <span style="font-size:30px;cursor:pointer; color: #000;" onclick="openNav()">
        <img src="landing_page/images/toggle-icon.png" alt="Toggle Menu">
        </span>
        <!-- Right-side User Info -->
        <!-- Avatar and Name -->
        <div class="d-flex align-items-center gap-2 p-2 rounded" style="background: #F2F2F2;">
          <div class="d-flex align-items-center gap-3">
         <div class="dropdown">
  <button class="btn position-relative bg-transparent border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-bell fs-4 text-dark"></i>
  </button>
  <ul class="dropdown-menu dropdown-menu-end shadow p-2" style="width: 300px; max-height: 400px; overflow-y: auto;">
    <li class="dropdown-header fw-bold">Latest Notifications</li>
    <hr class="my-1">

    
    <?php $__empty_1 = true; $__currentLoopData = $userResearches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $research): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li>
      <a href="#" class="dropdown-item py-2 d-flex flex-column">
        <span class="fw-semibold text-dark">
          📘 Research titled "<?php echo e($research->title); ?>" has been assigned to you.
        </span>
        <small class="text-muted"><?php echo e($research->created_at->diffForHumans()); ?></small>
      </a>
    </li>
    <li><hr class="dropdown-divider my-1"></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>

    
    <?php $__empty_1 = true; $__currentLoopData = $userExtensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li>
      <a href="#" class="dropdown-item py-2 d-flex flex-column">
        <span class="fw-semibold text-dark">
          🧩 Extension titled "<?php echo e($extension->title); ?>" has been assigned to you.
        </span>
        <small class="text-muted"><?php echo e($extension->created_at->diffForHumans()); ?></small>
      </a>
    </li>
    <li><hr class="dropdown-divider my-1"></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <?php endif; ?>

    <?php if($userResearches->isEmpty() && $userExtensions->isEmpty()): ?>
      <li class="text-center text-muted small py-2">No notifications available.</li>
    <?php endif; ?>
  </ul>
</div>


            <div style="
              width: 40px;
              height: 40px;
              background-color: #0d6efd;
              color: #fff;
              font-weight: bold;
              font-size: 20px;
              display: flex;
              justify-content: center;
              align-items: center;
              border-radius: 50%;
              user-select: none;
              ">
              <?php echo e(strtoupper(substr(Auth::user()->name, 0, 1))); ?>

            </div>
            <div class="d-flex flex-column">
              <span class="fw-bold">Welcome, <?php echo e(Auth::user()->name); ?></span>
            </div>
            <!-- Logout Button -->
            <form action="<?php echo e(url('logout')); ?>" method="POST" class="ms-2">
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-link text-danger fw-bold p-0" style="text-decoration: none;">Logout</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <div class="banner_section layout_padding">
      <div class="container text-center py-5">
        <h1 class="banner_taital">Welcome to the Research Library</h1>
        <p class="lead text-white">Access knowledge, discover resources, and empower your learning journey.</p>
        <a href="#" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#getStartedModal">Get Started</a>
      </div>
    </div>
    <div class="modal fade" id="getStartedModal" tabindex="-1" aria-labelledby="getStartedModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="getStartedModalLabel">Welcome to the Research Library</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="mb-0">Explore featured research, submit your projects, and connect with a growing community of scholars.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div id="library" class="container mt-5">
      <div class="card shadow-sm rounded-4">
        <div class="card-header d-flex justify-content-between align-items-center bg-black text-white rounded-top-4">
          <h5 class="mb-0 fw-bold" style="letter-spacing: 0.05em; text-transform: uppercase; ">Research Library</h5>
          <div class="position-relative" style="width: 250px;">
          </div>
        </div>
        <div class="card-body bg-light rounded-bottom-4">
          <p class="text-muted fs-6 mb-4">Your research projects</p>
          <div class="table-responsive">
            <table class="table table-hover align-middle w-100" id="researchTable">
              <thead class="table-dark">
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">Project Title</th>
                  <th>Description</th>
                  <th style="width: 15%;">Status</th>
                  <th style="width: 15%;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $researches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $research): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php
                $statusClass = match(strtolower($research->status)) {
                'approved' => 'badge bg-success text-white',
                'ongoing' => 'badge bg-primary text-white',
                'pending' => 'badge bg-warning text-black',
                'rejected', 'declined' => 'badge bg-danger text-white',
                default => 'badge bg-secondary text-black',
                };
                ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td class="fw-semibold"><?php echo e($research->title); ?></td>
                  <td>
                    <div class="text-truncate" style="max-width: 400px;" title="<?php echo e($research->description); ?>">
                      <?php echo e($research->description); ?>

                    </div>
                    <small class="text-muted d-block mt-1" style="font-size: 0.85em;">
                    <?php echo e(\Carbon\Carbon::parse($research->start_date)->format('M d, Y')); ?> - 
                    <?php echo e(\Carbon\Carbon::parse($research->end_date)->format('M d, Y')); ?>

                    </small>
                  </td>
                  <td>
                    <span class="<?php echo e($statusClass); ?>" style="font-size: 0.9em; min-width: 80px; display: inline-block; text-align: center; padding: 0.25em 0.6em; border-radius: 0.375rem;">
                    <?php echo e(ucfirst($research->status)); ?>

                    </span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo e($research->id); ?>">
                    View
                    </a>
                    <!-- Modal -->
                    <style>
                      .modal-xl-custom {
                      max-width: 70% !important;
                      width: 98%;
                      }
                    </style>
                    <div class="modal fade" id="viewModal<?php echo e($research->id); ?>" tabindex="-1" aria-labelledby="viewModalLabel<?php echo e($research->id); ?>" aria-hidden="true">
                      <div class="modal-dialog modal-xl modal-xl-custom modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="researchModalLabel<?php echo e($research->id); ?>">
                              📘 <?php echo e($research->title); ?> - Details
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-3">
                              <strong>Proponents:</strong> <?php echo e($research->proponents ?? ($research->user->name ?? 'N/A')); ?><br>
                              <strong>Start Date:</strong> <?php echo e(\Carbon\Carbon::parse($research->start_date)->format('F d, Y')); ?><br>
                              <strong>End Date:</strong> <?php echo e(\Carbon\Carbon::parse($research->end_date)->format('F d, Y')); ?><br>
                              <strong>Status:</strong> <?php echo e(ucfirst($research->status)); ?>

                            </div>
                            <div class="mb-3">
                              <strong>Description:</strong>
                              <p class="text-muted"><?php echo e($research->description); ?></p>
                            </div>
                            <?php
                            $links = [
                            'IMRAD Link' => $research->imrad_link,
                            'Research Contract' => $research->moa_link,
                            'MOU Link' => $research->mou_link,
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
                            ?>
                            <div class="row g-3">
                              
                              <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if(!empty($url)): ?>
                              <?php
                              preg_match('/(?:\/d\/|id=|folders\/)([-\w]{25,})/', $url, $matches);
                              $fileId = $matches[1] ?? null;
                              $isFolder = str_contains($url, 'folders/');
                              $isFile = str_contains($url, '/file/') || str_contains($url, 'uc?export=download');
                              $downloadLink = $fileId ? "https://drive.google.com/uc?export=download&id={$fileId}" : null;
                              ?>
                              <div class="col-md-3">
                                
                                <div class="border rounded p-3 h-100 shadow-sm">
                                  <h6 class="fw-bold small mb-2"><?php echo e($label); ?></h6>
                                  <?php if($fileId): ?>
                                  <a href="<?php echo e($downloadLink); ?>" class="btn btn-sm btn-success w-100 mb-2" target="_blank" download>
                                  ⬇ Download ZIP
                                  </a>
                                  <?php else: ?>
                                  <p class="text-danger small">Invalid Link</p>
                                  <?php endif; ?>
                                  <?php if($isFolder && $fileId): ?>
                                  <iframe 
                                    src="https://drive.google.com/embeddedfolderview?id=<?php echo e($fileId); ?>#grid" 
                                    style="width: 100%; height: 150px; border: 1px solid #ccc;">
                                  </iframe>
                                  <?php endif; ?>
                                </div>
                              </div>
                              <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if(empty(array_filter($links))): ?>
                            <p class="text-muted mt-3">No document links provided.</p>
                            <?php endif; ?>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                  <td colspan="5" class="text-center text-muted py-5">
                    <div class="fs-5">No research records available.</div>
                  </td>
                </tr>
                <?php endif; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-body bg-light rounded-bottom-4">
          <p class="text-muted fs-6 mb-4">Your extension projects</p>
          <div class="table-responsive">
            <table class="table table-hover align-middle" id="extensionTable">
              <thead class="table-dark">
                <tr>
                  <th style="width: 5%;">#</th>
                  <th style="width: 25%;">Project Title</th>
                  <th>Description</th>
                  <th style="width: 15%;">Status</th>
                  <th style="width: 15%;">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $extensions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $extension): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                $statusClass = match(strtolower($extension->status)) {
                'completed', 'completed' => 'badge bg-success text-white',
                'ongoing' => 'badge bg-primary text-white',
                'pending' => 'badge bg-warning text-black',
                'rejected', 'declined' => 'badge bg-danger text-white',
                default => 'badge bg-secondary text-black',
                };
                ?>
                <tr>
                  <td><?php echo e($loop->iteration); ?></td>
                  <td class="fw-semibold"><?php echo e($extension->title); ?></td>
                  <td>
                    <div class="text-truncate" style="max-width: 400px;" title="<?php echo e($extension->description); ?>">
                      <?php echo e($extension->description); ?>

                    </div>
                    <small class="text-muted d-block mt-1" style="font-size: 0.85em;">
                    <?php echo e(\Carbon\Carbon::parse($extension->start_date)->format('M d, Y')); ?> - <?php echo e(\Carbon\Carbon::parse($extension->end_date)->format('M d, Y')); ?>

                    </small>
                  </td>
                  <td>
                    <span class="<?php echo e($statusClass); ?>" style="font-size: 0.9em; min-width: 80px; display: inline-block; text-align: center; padding: 0.25em 0.6em; border-radius: 0.375rem;">
                    <?php echo e(ucfirst($extension->status)); ?>

                    </span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-outline-primary btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#viewExtensionModal<?php echo e($extension->id); ?>">View</a>
                    <!-- Modal -->
                    <div class="modal fade" id="viewExtensionModal<?php echo e($extension->id); ?>" tabindex="-1" aria-labelledby="extensionModalLabel<?php echo e($extension->id); ?>" aria-hidden="true">
                      <div class="modal-dialog modal-xl modal-xl-custom modal-dialog-centered">
                        <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="extensionModalLabel<?php echo e($extension->id); ?>">
                  🧩 <?php echo e($extension->title); ?> - Details
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                
                <div class="mb-3">
                  <strong>Proponents:</strong> <?php echo e($extension->proponents ?? ($extension->user->name ?? 'N/A')); ?><br>
                  <strong>Start Date:</strong> <?php echo e(\Carbon\Carbon::parse($extension->start_date)->format('F d, Y')); ?><br>
                  <strong>End Date:</strong> <?php echo e(\Carbon\Carbon::parse($extension->end_date)->format('F d, Y')); ?><br>
                  <strong>Status:</strong> <?php echo e(ucfirst($extension->status)); ?>

                </div>
                
                <div class="mb-3">
                  <strong>Description:</strong>
                  <p class="text-muted"><?php echo e($extension->description ?? '-'); ?></p>
                </div>
                
                <?php
                $links = [
                'Terminal Report' => $extension->terminal_report,
                'Research Contract' => $extension->moa,
                'MOU' => $extension->mou,
                ];
                ?>
                <div class="row g-3">
                  <?php $__currentLoopData = $links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <?php if(!empty($url)): ?>
                  <?php
                  preg_match('/(?:\/d\/|id=|folders\/)([-\w]{25,})/', $url, $matches);
                  $fileId = $matches[1] ?? null;
                  $isFolder = str_contains($url, 'folders/');
                  $downloadLink = $fileId ? "https://drive.google.com/uc?export=download&id={$fileId}" : null;
                  ?>
                  <div class="col-md-4">
                    <div class="border rounded p-3 h-100 shadow-sm">
                      <h6 class="fw-bold small mb-2"><?php echo e($label); ?></h6>
                      <?php if($fileId): ?>
                      <a href="<?php echo e($downloadLink); ?>" class="btn btn-sm btn-success w-100 mb-2" target="_blank" download>
                      ⬇ Download ZIP
                      </a>
                      <?php else: ?>
                      <p class="text-danger small">Invalid Link</p>
                      <?php endif; ?>
                      <?php if($isFolder && $fileId): ?>
                      <iframe 
                        src="https://drive.google.com/embeddedfolderview?id=<?php echo e($fileId); ?>#grid" 
                        style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px;">
                      </iframe>
                      <?php endif; ?>
                    </div>
                  </div>
                  <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php if(empty(array_filter($links))): ?>
                <p class="text-muted mt-3">No document links provided.</p>
                <?php endif; ?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- R&E Section -->
    <div id="rande" class="container mt-5 p-0 rounded shadow text-center">
      <div class="bg-white p-4 rounded-top">
        <h2 class="mb-3">Research and Extension Division</h2>
        <p class="mb-4">The Research and Extension Division (R&E) oversees innovation, development, and dissemination of scholarly work to advance institutional goals and community impact.</p>
        <ul class="list-unstyled mb-4">
          <li>
            <strong>Ongoing Research:</strong> Collaborative faculty and student projects tackling regional issues.
          </li>
          <li>
            <strong>Community Programs:</strong> Outreach efforts to uplift local communities via training, development, and education.
          </li>
          <li>
            <strong>Partnerships:</strong> Working with government, industries, and NGOs to bridge academia and practice.
          </li>
        </ul>
      </div>
      <img src="assets/img/rande.jpg" alt="Research and Extension Division" class="img-fluid rounded-bottom shadow" style="width: 100%; height: auto;">
    </div>
    <!-- Scroll to Top Button (optional floating button) -->
    <a href="#library" class="btn btn-primary position-fixed bottom-0 end-0 m-4 rounded-circle shadow" style="z-index: 1000; font-size: 1.5rem; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;"> ↑ </a>
    <footer style="height: 60px;">
    </footer>
    <script src="landing_page/js/jquery.min.js"></script>
    <script src="landing_page/js/popper.min.js"></script>
    <script src="landing_page/js/bootstrap.bundle.min.js"></script>
    <script src="landing_page/js/jquery-3.0.0.min.js"></script>
    <script src="landing_page/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="landing_page/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="landing_page/js/custom.js"></script>
    <!-- javascript -->
    <script src="landing_page/js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <!-- Bootstrap JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
      }
      function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      }
    </script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\ojt_project\resources\views/welcome.blade.php ENDPATH**/ ?>