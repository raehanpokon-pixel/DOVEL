<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logistic</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<!-- ================= NAVBAR ================= -->
<nav class="flex justify-between items-center px-10 py-5 bg-white shadow-sm">

    <!-- Logo -->
    <h1 class="text-2xl font-bold tracking-[6px] text-blue-600">DOVEL</h1>

    <!-- Menu -->
    <ul class="hidden md:flex gap-10 text-gray-500">
        <li class="hover:text-blue-600 cursor-pointer">Home</li>
        <li class="hover:text-blue-600 cursor-pointer">Property</li>
        <li class="hover:text-blue-600 cursor-pointer">About</li>
        <li class="hover:text-blue-600 cursor-pointer">Contact</li>
    </ul>

    <!-- Button -->
    <div class="flex gap-3">
        <button class="px-4 py-1 border rounded-full text-gray-500">Sign in</button>
        <button class="px-4 py-1 bg-blue-600 text-white rounded-full">Login</button>
    </div>

</nav>


<!-- ================= CONTENT ================= -->
<section class="px-10 py-10">

    <!-- Title + Filter -->
    <div class="flex flex-col md:flex-row md:items-center md:justify-between">

        <!-- Title -->
        <div>
            <h2 class="text-3xl font-bold">Best</h2>
            <h2 class="text-3xl font-bold border-b-4 border-blue-500 inline-block">
                Recommendation
            </h2>
        </div>

        <!-- Filter -->
        <div class="bg-blue-600 text-white p-4 rounded-xl flex gap-3 mt-6 md:mt-0 items-center shadow-lg">

            <div>
                <p class="text-xs">Location</p>
                <select class="text-black text-sm px-2 py-1 rounded">
                    <option>Royal Mesa, US</option>
                </select>
            </div>

            <div>
                <p class="text-xs">Type</p>
                <select class="text-black text-sm px-2 py-1 rounded">
                    <option>Room</option>
                </select>
            </div>

            <div>
                <p class="text-xs">Price Range</p>
                <select class="text-black text-sm px-2 py-1 rounded">
                    <option>$300 - $400</option>
                </select>
            </div>

            <button class="bg-black px-4 py-2 rounded-lg text-sm">
                🔍 Search
            </button>
        </div>
    </div>


    <!-- ================= CARD GRID ================= -->
    <div class="grid md:grid-cols-3 gap-8 mt-10">

        <!-- CARD 1 -->
        <div class="bg-white rounded-2xl shadow-md p-5 hover:scale-105 transition">

            <div class="bg-gray-100 rounded-xl p-4">
                <img src="https://via.placeholder.com/200" class="mx-auto">
            </div>

            <div class="flex justify-between mt-4">
                <h3 class="font-semibold">Kompor Portable</h3>
                <span class="text-sm text-gray-500">3.9</span>
            </div>

            <p class="text-gray-400 text-sm">Reyon Point, U.S</p>

            <p class="text-blue-600 font-bold mt-2">$ 350.00</p>

            <button class="mt-4 w-full bg-black text-white py-2 rounded-full">
                See More
            </button>
        </div>


        <!-- CARD 2 -->
        <div class="bg-white rounded-2xl shadow-md p-5 hover:scale-105 transition">

            <div class="bg-gray-100 rounded-xl p-4">
                <img src="https://via.placeholder.com/200" class="mx-auto">
            </div>

            <div class="flex justify-between mt-4">
                <h3 class="font-semibold">Nesting</h3>
                <span class="text-sm text-gray-500">4.1</span>
            </div>

            <p class="text-gray-400 text-sm">8080 Railroad St, U.S</p>

            <p class="text-blue-600 font-bold mt-2">$ 500.00</p>

            <button class="mt-4 w-full bg-black text-white py-2 rounded-full">
                See More
            </button>
        </div>


        <!-- CARD 3 -->
        <div class="bg-white rounded-2xl shadow-md p-5 hover:scale-105 transition">

            <div class="bg-gray-100 rounded-xl p-4">
                <img src="https://via.placeholder.com/200" class="mx-auto">
            </div>

            <div class="flex justify-between mt-4">
                <h3 class="font-semibold">Alat Makan</h3>
                <span class="text-sm text-gray-500">4.9</span>
            </div>

            <p class="text-gray-400 text-sm">Tween Tower, Portugal</p>

            <p class="text-blue-600 font-bold mt-2">$ 700.00</p>

            <button class="mt-4 w-full bg-black text-white py-2 rounded-full">
                See More
            </button>
        </div>

    </div>


    <!-- ================= CARD BAWAH ================= -->
    <div class="flex justify-center mt-12">

        <div class="bg-white rounded-2xl shadow-md p-5 w-80 hover:scale-105 transition">

            <div class="bg-gray-100 rounded-xl p-4">
                <img src="https://via.placeholder.com/200" class="mx-auto">
            </div>

            <span class="bg-orange-500 text-white text-xs px-3 py-1 rounded-full mt-3 inline-block">
                Premium Pack
            </span>

            <div class="flex justify-between mt-3">
                <h3 class="font-semibold">Satu Set Logistics</h3>
                <span class="text-sm text-gray-500">3.9</span>
            </div>

            <p class="text-gray-400 text-sm">Reyon Point, U.S</p>

            <p class="text-blue-600 font-bold mt-2">$ 350.00</p>

            <button class="mt-4 w-full bg-black text-white py-2 rounded-full">
                See More
            </button>
        </div>

    </div>

</section>

</body>
</html>