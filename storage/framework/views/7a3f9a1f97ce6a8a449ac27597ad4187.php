<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | R&E</title>
  <link rel="shortcut icon" href="assets/img/prism.svg" type="image/x-icon"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-gradient-to-b from-[#3c003c] via-[#5e003e] to-[#8b003e] flex items-center justify-center min-h-screen text-white">
  <div class="bg-[#22001f]/90 shadow-2xl rounded-2xl p-8 w-full max-w-md" id="container">

    <!-- Logo Section -->
    <div class="flex justify-center space-x-4 mb-6">
      <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white">
        <img src="<?php echo e(asset('assets/img/bagong_pilipinas.jpg')); ?>" alt="Logo 1" class="object-cover w-full h-full" />
      </div>
      <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white">
        <img src="<?php echo e(asset('assets/img/tup_logo.png')); ?>" alt="Logo 2" class="object-cover w-full h-full" />
      </div>
      <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-white">
        <img src="<?php echo e(asset('assets/img/res.jpg')); ?>" alt="Logo 3" class="object-cover w-full h-full" />
      </div>
    </div>
     <?php if(session('success')): ?>
      <p class="text-green-400 text-center font-semibold bg-green-900/30 border border-green-400 p-3 rounded-lg mb-4">
        <?php echo e(session('success')); ?>

      </p>
      <?php endif; ?>

      <?php if($errors->any()): ?>
      <div class="mb-4">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p class="text-red-300 text-sm text-center"><?php echo e($error); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endif; ?>
    <!-- Welcome Panel -->
    <div id="welcomePanel" class="text-center space-y-6">
      <h1 class="text-3xl font-bold">Welcome to</h1>
      <h2 class="text-xl font-semibold">Research and Extension Development Office</h2>
      <div class="flex flex-col space-y-3 mt-6">
        <button onclick="showLogin()" class="bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg font-semibold">Sign In</button>
        <button data-bs-toggle="modal" data-bs-target="#registerModal" class="bg-pink-600 hover:bg-pink-700 text-white py-2 rounded-lg font-semibold">Sign Up</button>
      </div>
    </div>

    <!-- Login Form -->
    <div id="loginPanel" class="hidden">
      <h2 class="text-xl font-bold mb-4 text-center">Login</h2>

     

      <form method="POST" action="<?php echo e(url('login')); ?>" class="space-y-4">
        <?php echo csrf_field(); ?>
        <input type="text" name="email" placeholder="Email or Username" value="<?php echo e(old('email')); ?>" required
          class="w-full p-3 border border-gray-600 bg-transparent text-white rounded-lg focus:ring focus:ring-pink-400 focus:outline-none" />
        <input type="password" name="password" placeholder="Password" required
          class="w-full p-3 border border-gray-600 bg-transparent text-white rounded-lg focus:ring focus:ring-pink-400 focus:outline-none" />

        <button type="submit"
          class="w-full bg-gradient-to-r from-red-600 to-pink-600 text-white py-3 rounded-lg font-semibold hover:from-pink-700 hover:to-red-700 transition duration-300">
          LOGIN
        </button>

        <div class="text-center text-sm text-gray-200 space-y-1">
          <a href="#" class="text-pink-300 font-semibold hover:underline" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password?</a><br>
        </div>

        <button type="button" class="text-white mt-2 block mx-auto hover:underline text-sm" onclick="goBack()">← Back</button>
      </form>
    </div>

    <!-- Forgot Password Modal -->
    <div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-labelledby="forgotPasswordModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-white">
          <div class="modal-header">
            <h5 class="modal-title" id="forgotPasswordModalLabel">Forgot Password</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Please proceed to the R&E Office to reset your password.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Register Info Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-dark bg-white">
          <div class="modal-header">
            <h5 class="modal-title" id="registerModalLabel">Sign Up Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Please proceed to the <strong>Research and Extension Development Office</strong> to sign up.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Okay</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Panel toggle script -->
  <script>
    function showLogin() {
      document.getElementById('welcomePanel').classList.add('hidden');
      document.getElementById('loginPanel').classList.remove('hidden');
    }

    function goBack() {
      document.getElementById('loginPanel').classList.add('hidden');
      document.getElementById('welcomePanel').classList.remove('hidden');
    }
  </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ojt_project\resources\views/signin.blade.php ENDPATH**/ ?>