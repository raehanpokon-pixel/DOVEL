<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Forget Password - DOVEL</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f5f6f8] font-sans overflow-hidden">

<div class="flex h-screen">

  <!-- LEFT -->
  <div class="w-1/2 flex items-center justify-center px-20">

    <div class="max-w-sm w-full">

      <!-- Title -->
      <h2 class="text-2xl font-bold text-blue-900">Forget Password</h2>
      <p class="text-sm text-gray-400 mt-1 mb-6">
        Enter your email to reset your password
      </p>

      <!-- Email -->
      <div class="mb-6">
        <label class="text-sm text-gray-600">Email*</label>
        <input type="email" placeholder="mail@example.com"
          class="w-full border rounded-lg px-3 py-2 mt-1 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
      </div>

      <!-- Button -->
      <button class="w-full bg-blue-600 text-white py-2 rounded-xl text-sm font-semibold hover:bg-blue-700 transition">
        Send Reset Link
      </button>

      <!-- Back to Login -->
      <p class="text-xs text-gray-500 text-center mt-4">
        Remember your password?
        <a href="/" class="text-blue-600 font-semibold hover:underline">
          Login
        </a>
      </p>

      <!-- Footer -->
      <p class="text-xs text-gray-400 text-center mt-16">
        © 2022 Horizon UI. All Rights Reserved.
      </p>

    </div>
  </div>

  <!-- RIGHT IMAGE -->
  <div class="w-1/2 hidden md:block h-full">
    <img src="image/moutain2.png"
      class="h-full w-full object-cover">
  </div>

</div>

</body>
</html>
