<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DOVEL</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f2f4] font-sans">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-4 bg-white shadow-sm">
  <h1 class="text-blue-600 font-bold tracking-[6px] text-lg">DOVEL</h1>

  <ul class="flex gap-6 text-gray-500 text-sm">
    <li>Home</li>
    <li class="text-black font-semibold">Property</li>
    <li>About</li>
    <li>Contact</li>
  </ul>

  <div class="flex gap-2 text-xs">
    <button class="px-4 py-1 border rounded-full">Sign in</button>
    <button class="px-4 py-1 bg-blue-500 text-white rounded-full">Login</button>
  </div>
</nav>

<!-- CONTENT -->
<section class="max-w-6xl mx-auto px-6 py-10">

  <!-- TOP -->
  <div class="flex justify-between items-start">

    <!-- TITLE -->
    <div>
      <h2 class="text-3xl font-bold leading-tight">
        Best <br>
        <span class="border-b-2 border-blue-400">Recommendation</span>
      </h2>
    </div>

    <!-- RIGHT -->
    <div class="flex flex-col items-end gap-4">

      <!-- FILTER (ATAS) -->
      <div class="flex gap-2 text-xs">

        <button class="flex items-center gap-1 px-3 py-1 rounded-full bg-blue-500 text-white shadow">
          <img src="image/restaurant 1.png" class="w-3 h-3">
          Logistics
        </button>

        <button class="flex items-center gap-1 px-3 py-1 rounded-full border bg-white shadow-sm">
          <img src="image/camp-chair 1.png" class="w-4 h-4">
          Gear
        </button>

        <button class="flex items-center gap-1 px-3 py-1 rounded-full border bg-white shadow-sm">
          <img src="image/school-bag 1.png" class="w-4 h-4">
          Carrier
        </button>

      </div>

      <!-- SEARCH -->
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

  <!-- CARD GRID -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-10">

    <div class="bg-white rounded-xl p-5 shadow-sm">
      <h3 class="text-sm font-semibold">Kompor Portable</h3>
      <p class="text-[11px] text-gray-400">Reyon Point, U.S</p>
      <div class="flex justify-between mt-3 text-xs">
        <span class="text-blue-500">$ 350.00</span>
        <span>3.9</span>
      </div>
      <button class="mt-3 w-full bg-black text-white text-xs py-2 rounded-full">See More</button>
    </div>

    <div class="bg-white rounded-xl p-5 shadow-sm">
      <h3 class="text-sm font-semibold">Nesting</h3>
      <p class="text-[11px] text-gray-400">8080 Railroad St, U.S</p>
      <div class="flex justify-between mt-3 text-xs">
        <span class="text-blue-500">$ 500.00</span>
        <span>4.1</span>
      </div>
      <button class="mt-3 w-full bg-black text-white text-xs py-2 rounded-full">See More</button>
    </div>

    <div class="bg-white rounded-xl p-5 shadow-sm">
      <h3 class="text-sm font-semibold">Alat Makan</h3>
      <p class="text-[11px] text-gray-400">Tainan Tower, Portugal</p>
      <div class="flex justify-between mt-3 text-xs">
        <span class="text-blue-500">$ 700.00</span>
        <span>4.9</span>
      </div>
      <button class="mt-3 w-full bg-black text-white text-xs py-2 rounded-full">See More</button>
    </div>

    <div class="bg-white rounded-xl p-5 shadow-sm">
      <h3 class="text-sm font-semibold">Satu Set Logistics</h3>
      <p class="text-[11px] text-gray-400">Reyon Point, U.S</p>
      <div class="flex justify-between mt-3 text-xs">
        <span class="text-blue-500">$ 350.00</span>
        <span>3.9</span>
      </div>
      <button class="mt-3 w-full bg-black text-white text-xs py-2 rounded-full">See More</button>
    </div>

  </div>

</section>

</body>
</html>