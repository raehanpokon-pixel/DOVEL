<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dovel - Contact</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-10 py-4 bg-white shadow">
    <h1 class="text-blue-600 font-bold text-xl tracking-widest">DOVEL</h1>

    <ul class="flex gap-8 text-gray-600 font-medium">
    <li>
        <a href="{{ url('/') }}" class="hover:text-blue-500">Home</a>
    </li>

    <li>
        <a href="{{ url('/property') }}" class="hover:text-blue-500">Property</a>
    </li>

    <li>
        <a href="{{ url('/about') }}" class="hover:text-blue-500">About</a>
    </li>

    <li>
        <a href="{{ url('/contact') }}" class="text-blue-500 font-semibold">Contact</a>
    </li>
</ul>

    <div class="flex gap-2">
        <button class="px-4 py-1 border rounded-full">Sign in</button>
        <button class="px-4 py-1 bg-blue-500 text-white rounded-full">Login</button>
    </div>
</nav>

<!-- HERO -->
<section class="px-10 mt-6">
    <div class="relative rounded-2xl overflow-hidden">
        <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee"
             class="w-full h-[300px] object-cover">

        <div class="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-white">
            <h1 class="text-blue-400 text-2xl font-bold tracking-widest">DOVEL</h1>
            <h2 class="text-4xl font-bold mt-2">Help & Center</h2>
            <p class="mt-2">How can we help you?</p>

            <input type="text"
                placeholder="Search For Help"
                class="mt-4 px-6 py-3 rounded-full w-[400px] text-black outline-none">
        </div>
    </div>
</section>

<!-- CARD MENU -->
<section class="grid grid-cols-3 gap-6 px-10 mt-8">

    <div class="bg-white p-6 rounded-xl shadow text-center">
        <h3 class="font-semibold">Tracking Orders</h3>
        <p class="text-sm text-gray-500">Track Package Order History</p>
        <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Lacak Pesanan</button>
    </div>

    <div class="bg-white p-6 rounded-xl shadow text-center">
        <h3 class="font-semibold">Shipping & Returns</h3>
        <p class="text-sm text-gray-500">Get Info About How To Return</p>
        <button class="mt-4 bg-green-500 text-white px-4 py-2 rounded">Kebijakan Pengiriman</button>
    </div>

    <div class="bg-white p-6 rounded-xl shadow text-center">
        <h3 class="font-semibold">Manage Account</h3>
        <p class="text-sm text-gray-500">Manage Your Account Preferences</p>
        <button class="mt-4 bg-orange-500 text-white px-4 py-2 rounded">Login</button>
    </div>

</section>

<!-- CONTACT SECTION -->
<section class="grid grid-cols-2 gap-8 px-10 mt-10 mb-10">

    <!-- EASY TO CALL (SUDAH DIPERBAIKI) -->
    <div class="bg-gradient-to-br from-blue-100 to-blue-200 p-8 rounded-2xl shadow-md flex items-start gap-5">

        <!-- ICON -->
        <div class="bg-black text-white p-4 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" 
                class="h-6 w-6" fill="none" 
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5a2 2 0 012-2h2.28a2 2 0 011.94 1.515l.516 2.064a2 2 0 01-.45 1.866l-1.27 1.27a16.001 16.001 0 006.586 6.586l1.27-1.27a2 2 0 011.866-.45l2.064.516A2 2 0 0121 16.72V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
        </div>

        <!-- TEXT -->
        <div class="flex-1">
            <h3 class="text-lg font-semibold text-gray-800">Easy to Call</h3>

            <p class="text-gray-600 text-sm mt-1 leading-relaxed">
                Need camping gear? Contact our team now and get ready for your adventure.
            </p>

            <p class="text-blue-600 text-xl font-bold mt-4">
                +62 12 6904 8930
            </p>

            <p class="text-xs text-gray-500 mt-1">
                We’re ready to help you!
            </p>

            <button class="mt-4 bg-blue-500 hover:bg-blue-600 transition text-white px-6 py-2 rounded-lg shadow">
                Call Now
            </button>
        </div>

    </div>

    <!-- FORM -->
    <div class="bg-white p-8 rounded-2xl shadow">
        <h3 class="text-xl font-bold mb-4">Chat & Support</h3>

        <form>
            <input type="text" placeholder="Name"
                class="w-full mb-3 px-4 py-2 border rounded">

            <input type="email" placeholder="Email"
                class="w-full mb-3 px-4 py-2 border rounded">

            <textarea placeholder="Type your message"
                class="w-full mb-3 px-4 py-2 border rounded h-24"></textarea>

            <button class="w-full bg-blue-500 text-white py-2 rounded">
                Send Message
            </button>
        </form>
    </div>

</section>

</body>
</html>