<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DOVEL - Gear</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f2f4] font-sans">

  <!-- Navbar -->
  <nav class="flex justify-between items-center px-10 py-4 bg-white shadow-sm">
    <h1 class="text-blue-600 font-bold tracking-[6px] text-lg">DOVEL</h1>

    <ul class="flex gap-6 text-gray-500 text-sm">
      <li><a href="/home">Home</a></li>
      <li><a href="#">Property</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>

    <div class="flex gap-2 text-xs">
      <button class="px-4 py-1 border rounded-full">Sign in</button>
      <button class="px-4 py-1 bg-blue-500 text-white rounded-full">Login</button>
    </div>
  </nav>

  <!-- Content -->
  <section class="max-w-6xl mx-auto px-6 py-8">

    <!-- Top -->
    <div class="flex justify-between items-start mb-6">

      <!-- Title -->
      <div>
        <h2 class="text-3xl font-bold leading-tight">
          Best <br>
          <span class="border-b-2 border-blue-400">Recommendation</span>
        </h2>
      </div>

      <!-- Right -->
      <div class="flex flex-col items-end gap-4">

        <!-- Filter -->
        <div class="flex gap-2 text-xs">
          <button class="flex items-center gap-1 px-3 py-1 rounded-full border bg-white shadow-sm">
  <img src="image/restaurant 1.png" alt="logistics" class="w-3 h-3">
  Logistics
</button>
          <button class="flex items-center gap-1 px-3 py-1 rounded-full bg-blue-500 text-white shadow">
  <img src="image/camp-chair 1.png" alt="gear" class="w-4 h-4">
  Gear
</button>

<a href="property.carrier">
  <button class="flex items-center gap-1 px-3 py-1 rounded-full border bg-white shadow-sm">
    <img src="image/school-bag 1.png" alt="gear" class="w-4 h-4">
    carrier
  </button>
</a>
        </div>

        <!-- Search -->
        <div class="bg-blue-500 rounded-xl px-5 py-4 flex gap-4 items-end shadow-md">

          <div class="flex flex-col text-xs text-white">
            <label class="mb-1">Location</label>
            <select class="text-black px-2 py-1 rounded">
              <option>Royal Mesa, U.S</option>
            </select>
          </div>

          <div class="flex flex-col text-xs text-white">
            <label class="mb-1">Type</label>
            <select class="text-black px-2 py-1 rounded">
              <option>Room</option>
            </select>
          </div>

          <div class="flex flex-col text-xs text-white">
            <label class="mb-1">Price Range</label>
            <select class="text-black px-2 py-1 rounded">
              <option>$300 - $400</option>
            </select>
          </div>

          <button class="bg-black text-white px-5 py-2 rounded-full text-xs">
            🔍 Search
          </button>
        </div>
      </div>
    </div>

    <!-- GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- 1 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/1.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Flysheet</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 350.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 2 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/2.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Tenda</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 3 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/3.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Matras</h3>
          <span class="text-xs">4.9</span>
        </div>
        <p class="text-[11px] text-gray-400">Portugal</p>
        <p class="text-blue-500">$ 700.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 4 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/4.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Sleeping Bag</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 5 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/5.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Lampu Teplon</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 6 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/6.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Hammock</h3>
          <span class="text-xs">4.9</span>
        </div>
        <p class="text-[11px] text-gray-400">Portugal</p>
        <p class="text-blue-500">$ 700.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 7 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/7.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Headlamp</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 8 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/8.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Chair Table</h3>
          <span class="text-xs">4.1</span>
        </div>
        <p class="text-[11px] text-gray-400">8000 Rainfall · U.S</p>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <!-- 9 -->
      <div class="bg-white rounded-xl p-4 shadow-sm">
        <img src="image/9.png" class="mx-auto h-28">
        <div class="mt-3 flex justify-between">
          <h3 class="text-sm font-semibold">Mantel Ponco</h3>
          <span class="text-xs">4.9</span>
        </div>
        <p class="text-[11px] text-gray-400">Portugal</p>
        <p class="text-blue-500">$ 700.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

    </div>

    <!-- LAST ROW (CENTER) -->
    <div class="flex justify-center gap-6 mt-8">

      <div class="w-64 bg-white rounded-xl p-4 shadow-sm">
        <img src="image/10.png" class="mx-auto h-28">
        <h3 class="text-sm font-semibold mt-3">Jaket Gunung</h3>
        <span class="text-xs float-right">4.1</span>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

      <div class="w-64 bg-white rounded-xl p-4 shadow-sm">
        <img src="image/11.png" class="mx-auto h-28">
        <h3 class="text-sm font-semibold mt-3">Power Bank</h3>
        <span class="text-xs float-right">4.1</span>
        <p class="text-blue-500">$ 500.00</p>
        <button class="mt-2 w-full bg-black text-white text-xs py-1 rounded-full">See More</button>
      </div>

    </div>

  </section>

</body>
</html>
