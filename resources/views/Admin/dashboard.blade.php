<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DOVEL Dashboard</title>

  <!-- Tailwind -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
</head>

<body class="bg-[#eef2f7]">

<div class="flex min-h-screen">

  <!-- SIDEBAR -->
<aside class="w-64 bg-[#f5f7fb] min-h-screen flex flex-col justify-between px-6 py-8">

  <!-- Logo -->
  <div>
    <h1 class="text-blue-600 font-bold tracking-[6px] text-lg mb-10">DOVEL</h1>

    <!-- Menu -->
    <nav class="space-y-6 text-sm">

      <!-- ITEM -->
  <a href="/dashboard" class="relative flex items-center gap-3 text-blue-600 font-medium pl-3">
    <span class="absolute left-0 top-0 h-full w-1 bg-blue-500 rounded-r"></span>
    <i data-lucide="home" class="w-4 h-4"></i>
    Dashboard
  </a>

      <a href="/reports" class="flex items-center gap-3 text-gray-400 hover:text-blue-500 transition">
        <i data-lucide="bar-chart-2" class="w-4 h-4"></i>
        Reports
      </a>

      <a href="#" class="flex items-center gap-3 text-gray-400 hover:text-blue-500 transition">
        <i data-lucide="user" class="w-4 h-4"></i>
        Manage User
      </a>

  <a href="#" class="flex items-center gap-3 text-gray-400 hover:text-blue-500 transition">
    <i data-lucide="credit-card" class="w-4 h-4"></i>
    Generate Bill
  </a>

      <a href="#" class="flex items-center gap-3 text-gray-400 hover:text-blue-500 transition">
        <i data-lucide="box" class="w-4 h-4"></i>
        Product
      </a>

      <a href="#" class="flex items-center gap-3 text-gray-400 hover:text-blue-500 transition">
        <i data-lucide="settings" class="w-4 h-4"></i>
        Profile
      </a>

    </nav>
  </div>

  <!-- Logout -->
  <button class="bg-blue-500 text-white py-2 rounded-full text-sm hover:bg-blue-600 transition">
    Logout
  </button>

</aside>

  <!-- MAIN -->
  <main class="flex-1 p-8">

    <!-- TOP -->
    <div class="flex justify-between items-center mb-6">

      <div>
        <p class="text-xs text-gray-400">Pages / Dashboard</p>
        <h2 class="text-2xl font-bold text-gray-700">Main Dashboard</h2>
        <p class="text-green-500 text-sm">Lalitpur Branch</p>
      </div>

      <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-full shadow-sm">
        <i data-lucide="search" class="w-4"></i>
        <input placeholder="Search" class="outline-none text-sm">
        <div class="w-8 h-8 bg-blue-200 rounded-full"></div>
      </div>

    </div>

    <!-- STATS -->
    <div class="grid grid-cols-3 gap-4 mb-6">

      <div class="bg-white rounded-xl p-4 shadow-sm flex items-center gap-3">
        <i data-lucide="users" class="text-blue-500"></i>
        <div>
          <p class="text-xs text-gray-400">Users</p>
          <h3 class="font-bold">45</h3>
        </div>
      </div>

      <div class="bg-white rounded-xl p-4 shadow-sm flex items-center gap-3">
        <i data-lucide="dollar-sign" class="text-blue-500"></i>
        <div>
          <p class="text-xs text-gray-400">Total Payments</p>
          <h3 class="font-bold">Rs. 200,000</h3>
        </div>
      </div>

      <div class="bg-white rounded-xl p-4 shadow-sm flex items-center gap-3">
        <i data-lucide="activity" class="text-blue-500"></i>
        <div>
          <p class="text-xs text-gray-400">Active users</p>
          <h3 class="font-bold">22</h3>
        </div>
      </div>

    </div>

    <!-- CHART -->
    <div class="grid grid-cols-3 gap-6 mb-6">

      <!-- LINE -->
      <div class="col-span-2 bg-white p-6 rounded-xl shadow-sm">

        <p class="text-xs bg-gray-100 inline-block px-2 py-1 rounded mb-3">
          This month
        </p>

        <h3 class="text-xl font-bold mb-2">Rs. 200,000</h3>
        <p class="text-green-500 text-xs mb-4">● On track of this area</p>

        <canvas id="lineChart"></canvas>

      </div>

      <!-- PIE -->
      <div class="bg-white p-6 rounded-xl shadow-sm flex flex-col items-center">

        <div class="flex justify-between w-full mb-4">
          <p class="text-sm font-medium">Payment Analysis</p>
          <span class="text-xs text-gray-400">Monthly</span>
        </div>

        <canvas id="pieChart" class="w-32 h-32"></canvas>

        <div class="text-xs mt-4 text-gray-500">
          <p><span class="text-blue-500">●</span> Payments Done 63%</p>
          <p><span class="text-cyan-400">●</span> Payments Pending 25%</p>
        </div>

      </div>

    </div>

    <!-- RECENT -->
    <div class="bg-white p-6 rounded-xl shadow-sm">

      <div class="flex justify-between mb-4">
        <h3 class="font-semibold">Recent Payments</h3>
        <span class="text-blue-500 text-xs">See all</span>
      </div>

      <div class="space-y-4">

        <div class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-purple-400 rounded-lg"></div>
            <p class="text-sm">Mitlesh K. Singh</p>
          </div>
          <p>Rs. 3000</p>
          <i data-lucide="more-horizontal"></i>
        </div>

        <div class="flex justify-between items-center">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-green-400 rounded-lg"></div>
            <p class="text-sm">Suron Maharjan</p>
          </div>
          <p>Rs. 800</p>
          <i data-lucide="more-horizontal"></i>
        </div>

      </div>

    </div>

  </main>

</div>

<!-- SCRIPT -->
<script>
lucide.createIcons();

// LINE CHART
new Chart(document.getElementById('lineChart'), {
  type: 'line',
  data: {
    labels: ['Sep','Oct','Nov','Dec','Jan','Feb'],
    datasets: [
      {
        data: [20,40,30,60,50,70],
        borderColor: '#3b82f6',
        tension: 0.4
      },
      {
        data: [10,30,20,40,35,50],
        borderColor: '#06b6d4',
        tension: 0.4
      }
    ]
  },
  options: {
    plugins: { legend: { display: false } }
  }
});

// PIE
new Chart(document.getElementById('pieChart'), {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [63,25],
      backgroundColor: ['#3b82f6','#06b6d4']
    }]
  },
  options: {
    cutout: '70%',
    plugins: { legend: { display: false } }
  }
});
</script>

</body>
</html>
