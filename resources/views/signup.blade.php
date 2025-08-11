<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>LOGIN</title>
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/prism.svg">
      <script src="https://cdn.tailwindcss.com"></script>
   </head>
   <body class="bg-white flex items-center justify-center min-h-screen">
      <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-md">
         
         <!-- Logos (Three circular logos) -->
         <div class="flex justify-center space-x-4 mb-6">
            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-gray-300">
               <img src="{{ asset('assets/img/bagongpilipinas.jpg') }}" alt="Logo 1" class="object-cover w-full h-full">
            </div>
            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-gray-300">
               <img src="{{ asset('assets/img/tup_logo.png') }}" alt=" 2" class="object-cover w-full h-full">
            </div>
            <div class="w-16 h-16 rounded-full overflow-hidden border-2 border-gray-300">
               <img src="{{ asset('assets/img/res.jpg') }}" alt="Logo 3" class="object-cover w-full h-full">
            </div>
         </div>

         <!-- Error Message -->
         @if (session('success'))
         <p class="text-green-600 text-center font-semibold bg-green-50 border border-green-400 p-3 rounded-lg mb-4">
            {{ session('success') }}
         </p>
         @endif

         <!-- Display Validation Errors -->
         @if ($errors->any())
         <div class="mb-4">
            @foreach ($errors->all() as $error)
            <p class="text-red-600 text-sm text-center">{{ $error }}</p>
            @endforeach
         </div>
         @endif 

         <form method="POST" action="{{ url('signup') }}" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-semibold text-gray-800">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" required 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-600 focus:outline-none">
            </div>
            <div>
                <label for="email" class="block text-sm font-semibold text-gray-800">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-600 focus:outline-none">
            </div>
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-800">Password</label>
                <input type="password" name="password" required 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-600 focus:outline-none">
            </div>
            <div>
                <label for="password_confirmation" class="block text-sm font-semibold text-gray-800">Repeat Password</label>
                <input type="password" name="password_confirmation" required 
                    class="w-full p-3 border border-gray-300 rounded-lg focus:ring focus:ring-blue-600 focus:outline-none">
            </div>
            <button type="submit" 
                class="w-full bg-blue-900 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                Sign Up
            </button>
            <p class="text-center text-sm text-gray-600">
                Already have an account? <a href="{{ url('signin') }}" class="text-blue-900 font-semibold hover:underline">Sign In</a>
            </p>
        </form>
        
      </div>
   </body>
</html>
