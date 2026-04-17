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
  <header class="flex items-center justify-between px-6 md:px-10 py-5">

    <!-- Logo -->
    <h1 class="text-2xl font-bold text-blue-600 tracking-widest">DOVEL</h1>

    <!-- Menu -->
    <nav class="hidden md:flex space-x-8 text-gray-600">
      <a href="/home" class="hover:text-blue-600 transition">Home</a>
      <a href="/property.gear" class="hover:text-blue-600 transition">Property</a>
      <a href="#" class="hover:text-blue-600 transition">About</a>
      <a href="#" class="hover:text-blue-600 transition">Contact</a>
    </nav>

    <!-- Auth Buttons -->
    <div class="flex items-center bg-gray-200 rounded-full p-1">
      <a href="/register" class="px-4 py-1 text-sm text-gray-600 hover:text-black transition">
        Sign up
      </a>
      <a href="/" class="px-5 py-1 text-sm bg-blue-500 text-white rounded-full shadow hover:bg-blue-600 transition">
        Sign in
      </a>
    </div>

  </header>

  <!-- HERO -->
  <section class="min-h-screen flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-10 gap-10">

    <!-- Text -->
    <div class="max-w-xl text-center md:text-left">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6">
        Elevate Your Stay,<br>
        Elevate Your Status.
      </h2>

      <p class="text-gray-600 mb-6">
        Temukan perlengkapan terbaik untuk petualangan dan kenyamanan Anda.
        DOVEL menyediakan berbagai pilihan gear berkualitas dengan harga terbaik.
      </p>

      <button class="bg-blue-500 text-white px-6 py-2 rounded-full hover:bg-blue-600 transition">
        Explore Now
      </button>
    </div>

    <!-- Image (SMOOTH SLIDER) -->
    <div class="relative w-[300px] md:w-[400px] h-[250px] md:h-[320px]">
      <img
        id="heroImage"
        src="/image/kompor.png"
        class="absolute w-full h-full object-contain transition-opacity duration-1000 opacity-100"
      >
    </div>

  </section>

  <!-- SCRIPT SMOOTH IMAGE -->
  <script>
    const images = [
      "/image/kompor.png",
      "/image/10.png",
      "/image/12.png"
    ];

    let index = 0;
    const img = document.getElementById("heroImage");

    setInterval(() => {
      // fade out
      img.classList.add("opacity-0");

      setTimeout(() => {
        index = (index + 1) % images.length;
        img.src = images[index];

        // fade in
        img.classList.remove("opacity-0");
      }, 500);

    }, 3000);
  </script>

</body>
</html>
