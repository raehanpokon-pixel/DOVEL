<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DOVEL Reports</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-[#eef2f7]">

<div class="flex min-h-screen">

  <!-- SIDEBAR -->
  <aside class="w-64 bg-[#f5f7fb] flex flex-col justify-between px-6 py-8">

    <div>
      <h1 class="text-blue-600 font-bold tracking-[6px] text-lg mb-10">DOVEL</h1>

      <nav class="space-y-6 text-sm">

        <a href="/dashboard" class="flex items-center gap-3 text-gray-400">
          <i data-lucide="home"></i> Dashboard
        </a>

        <a href="/reports" class="flex items-center gap-3 text-blue-600 font-medium">
          <i data-lucide="bar-chart-2"></i> Reports
        </a>

        <a href="#" class="flex items-center gap-3 text-gray-400">
          <i data-lucide="user"></i> Manage User
        </a>

        <a href="#" class="flex items-center gap-3 text-gray-400">
          <i data-lucide="credit-card"></i> Generate Bill
        </a>

        <a href="#" class="flex items-center gap-3 text-gray-400">
          <i data-lucide="box"></i> Product
        </a>

        <a href="#" class="flex items-center gap-3 text-gray-400">
          <i data-lucide="settings"></i> Profile
        </a>

      </nav>
    </div>

    <button class="bg-blue-500 text-white py-2 rounded-full text-sm">
      Logout
    </button>

  </aside>

  <!-- MAIN -->
  <main class="flex-1 p-8">

    <!-- HEADER -->
    <div class="flex justify-between items-center mb-6">

      <div>
        <p class="text-xs text-gray-400">Pages / Reports</p>
        <h2 class="text-2xl font-bold text-gray-700">Reports</h2>
        <p class="text-green-500 text-sm">Lalitpur Branch</p>
      </div>

      <!-- SEARCH -->
      <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-full shadow-sm">
        <i data-lucide="search" class="w-4 text-gray-400"></i>
        <input placeholder="Search" class="outline-none text-sm">
        <div class="w-8 h-8 bg-blue-200 rounded-full"></div>
      </div>

    </div>

    <!-- PAYMENT TABLE -->
    <div class="bg-white rounded-xl p-6 shadow-sm mb-6">

      <div class="flex justify-between items-center mb-4">
        <h3 class="font-semibold">Payment Details</h3>
        <button class="text-gray-400">•••</button>
      </div>

      <!-- TABLE -->
      <div class="text-sm">

        <div class="grid grid-cols-4 text-gray-400 mb-3">
          <p>Users</p>
          <p>Address</p>
          <p>Date</p>
          <p>Amount</p>
        </div>

        <!-- DATA -->
        <div class="space-y-3 text-gray-700">

          <div class="grid grid-cols-4">
            <p>Mitlesh Kumar Singh</p>
            <p>Kirtipur, Kathmandu</p>
            <p>12 Jan 2021</p>
            <p>Rs. 2500</p>
          </div>

          <div class="grid grid-cols-4">
            <p>Suron Maharjan</p>
            <p>Natole, Lalitpur</p>
            <p>21 Feb 2021</p>
            <p>Rs. 4000</p>
          </div>

          <div class="grid grid-cols-4">
            <p>Sandesh Bajracharya</p>
            <p>Bhingkhel, Lalitpur</p>
            <p>13 Mar 2021</p>
            <p>Rs. 800</p>
          </div>

          <div class="grid grid-cols-4">
            <p>Subin Sedhai</p>
            <p>Baneshwor</p>
            <p>24 Jan 2021</p>
            <p>Rs. 1500</p>
          </div>

        </div>

      </div>

    </div>

    <!-- LOWER SECTION -->
    <div class="grid grid-cols-2 gap-6">

      <!-- WEEKLY -->
      <div class="bg-white p-6 rounded-xl shadow-sm">

        <div class="flex justify-between mb-4">
          <h3 class="font-semibold">Weekly Payments</h3>
          <i data-lucide="bar-chart-3"></i>
        </div>

        <!-- SIMPLE BAR -->
        <div class="flex items-end gap-4 h-32">

          <div class="w-6 bg-blue-500 h-16 rounded"></div>
          <div class="w-6 bg-blue-400 h-20 rounded"></div>
          <div class="w-6 bg-blue-300 h-12 rounded"></div>
          <div class="w-6 bg-blue-500 h-24 rounded"></div>
          <div class="w-6 bg-blue-400 h-18 rounded"></div>

        </div>

      </div>

      <!-- PENDING -->
      <div class="bg-white p-6 rounded-xl shadow-sm">

        <div class="flex justify-between mb-4">
          <h3 class="font-semibold">Pending Payments</h3>
          <span class="text-blue-500 text-xs">See all</span>
        </div>

        <div class="space-y-4 text-sm">

          <div class="flex justify-between">
            <p>Lily Bloom</p>
            <p>Rs. 2000</p>
          </div>

          <div class="flex justify-between">
            <p>Atlas Corrigan</p>
            <p>Rs. 900</p>
          </div>

          <div class="flex justify-between">
            <p>Lela Lawrence</p>
            <p>Rs. 1520</p>
          </div>

          <div class="flex justify-between">
            <p>Ryle Kincaid</p>
            <p>Rs. 740</p>
          </div>

        </div>

      </div>

    </div>

  </main>

</div>

<script>
lucide.createIcons();
</script>

</body>
</html>
