<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DOVEL</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-gray-100 to-blue-100">

  <!-- NAVBAR -->
  <header class="flex items-center justify-between px-10 py-5">

    <!-- Logo -->
    <h1 class="text-2xl font-bold text-blue-600 tracking-widest">DOVEL</h1>

    <!-- Menu -->
    <nav class="hidden md:flex space-x-8 text-gray-600">
      <a href="/home" class="hover:text-blue-600">Home</a>
      <a href="property.gear" class="hover:text-blue-600">Property</a>
      <a href="#" class="hover:text-blue-600">About</a>
      <a href="#" class="hover:text-blue-600">Contact</a>
    </nav>

    <!-- Auth Buttons -->
    <div class="flex items-center bg-gray-200 rounded-full p-1">
<a href="/register" class="px-4 py-1 text-sm text-gray-600">
  Sign up
</a>

<a href="/" class="px-5 py-1 text-sm bg-blue-500 text-white rounded-full shadow">
  Sign in
</a>
    </div>

  </header>

  <!-- HERO -->
<section class="min-h-screen flex items-center justify-between px-10">

  <!-- Text -->
  <div class="max-w-xl"> 
    <h2 class="text-5xl font-bold text-gray-900 leading-tight mb-6">
      Elevate Your Stay,<br>
      Elevate Your Status.
    </h2>

    <p class="text-gray-600 mb-6">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    </p>
  </div>

  <!-- Image -->
<div class="mr-20">
    <img
      src="/image/kompor.png"
      class="w-[400px]"
    >
  </div>

</section>

</body>
</html>
