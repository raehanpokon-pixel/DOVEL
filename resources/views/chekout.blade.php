<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>DOVEL - Detail</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#f1f2f4] font-sans">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-4 bg-white shadow-sm">
  <h1 class="text-blue-600 font-bold tracking-[6px] text-lg">DOVEL</h1>

  <ul class="flex gap-6 text-gray-500 text-sm">
    <li>Home</li>
   <li>
  <a href="{{ route('property') }}" class="hover:text-black">
    Property
  </a>
</li>
    <li>About</li>
    <li>Contact</li>
  </ul>

  <div class="flex gap-2 text-xs">
    <button class="px-4 py-1 border rounded-full">Sign in</button>
    <button class="px-4 py-1 bg-blue-500 text-white rounded-full">Login</button>
</a>
  </div>
</nav>

<!-- CONTENT -->
<div class="max-w-6xl mx-auto mt-10 grid grid-cols-3 gap-6">

  <!-- LEFT -->
  <div class="col-span-2 bg-white rounded-2xl shadow p-6">

    <h2 class="font-bold text-lg">KOMPOR PORTABLE</h2>

    <div class="flex items-center gap-2 mt-2 text-sm">
      <span class="text-yellow-400">★★★★★</span>
      <span class="text-gray-500">4.8</span>
      <span class="text-gray-400">| 120 Terjual</span>
    </div>

    <h1 class="text-blue-500 text-3xl font-bold mt-3">$ 350.00</h1>

    <!-- IMAGE -->
    <div class="flex justify-center mt-4">
      <img src="image/kompor.png" class="h-48">
    </div>

    <!-- INFO BOX -->
    <div class="bg-gray-100 rounded-xl p-4 mt-6 flex items-center gap-3 text-sm text-gray-600 shadow-sm">
      <span>📦</span>
      <span>Tersisa 5 Buah | Pengiriman Cepat</span>
    </div>

    <!-- DESC -->
    <div class="mt-6">
      <div class="flex items-center gap-2 font-semibold">
        <span>📦</span>
        <span>KOMPOR PORTABLE</span>
      </div>

      <div class="border-t mt-3 pt-3 text-sm text-gray-500">
        Tersisa 5 Buah | Pengiriman Cepat
      </div>
    </div>

  </div>

  <!-- RIGHT -->
  <div class="bg-white rounded-2xl shadow p-6">

    <h2 class="font-semibold mb-4">Ringkasan Pemesanan</h2>

    <!-- PRICE -->
    <div class="text-sm space-y-3">
      <div class="flex justify-between border-b pb-2">
        <span>Subtotal</span>
        <span>$ 350</span>
      </div>

      <div class="flex justify-between border-b pb-2">
        <span>Pengiriman</span>
        <span class="text-green-500">Gratis</span>
      </div>

      <div class="flex justify-between font-semibold">
        <span>Total</span>
        <span>$ 350</span>
      </div>
    </div>

    <!-- PAYMENT -->
    <div class="flex gap-2 mt-4">
      <button class="flex-1 border rounded-md py-2 text-xs">Gopay</button>
      <button class="flex-1 border rounded-md py-2 text-xs">Dana</button>
      <button class="flex-1 border rounded-md py-2 text-xs">Kartu Kredit</button>
    </div>

    <!-- FORM -->
    <div class="mt-4 space-y-3">

      <input type="text" placeholder="Nama" class="w-full border rounded-md px-3 py-2 text-sm">

      <div class="flex">
        <span class="px-3 py-2 border rounded-l-md text-sm bg-gray-100">+62</span>
        <input type="text" class="w-full border-t border-b border-r rounded-r-md px-3 py-2 text-sm">
      </div>

      <input type="text" placeholder="Alamat Lengkap" class="w-full border rounded-md px-3 py-2 text-sm">

    </div>

    <!-- BUTTON -->
    <button class="w-full mt-5 bg-blue-500 text-white py-2 rounded-md">
      Beli Sekarang
    </button>

  </div>

</div>

</body>
</html>