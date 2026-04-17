<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Dovel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-gray-100 to-blue-100 font-sans">

    <!-- Navbar -->
    <nav class="flex justify-between items-center px-10 py-4 bg-white shadow-sm">
        <div class="text-2xl font-bold text-blue-600 tracking-widest">D O V E L</div>

        <ul class="flex space-x-8 text-gray-600">
            <li><a href="/" class="hover:text-blue-500">Home</a></li>
            <li><a href="/property" class="hover:text-blue-500">Property</a></li>
            <li><a href="/about" class="text-blue-500 font-semibold">About</a></li>
            <li><a href="/contact" class="hover:text-blue-500">Contact</a></li>
        </ul>

        <div class="space-x-3">
            <button class="px-4 py-1 border rounded-full text-gray-600">Sign in</button>
            <button class="px-4 py-1 bg-blue-500 text-white rounded-full">Login</button>
        </div>
    </nav>

    <!-- About Section -->
    <section class="px-10 py-10 grid grid-cols-2 gap-10 items-center">

        <!-- Image kiri -->
        <div>
            <img src="/images/camp1.jpg" class="rounded-2xl shadow-lg w-80">
        </div>

        <!-- Text kanan -->
        <div>
            <h2 class="text-2xl font-bold mb-4">About Us</h2>
            <p class="text-gray-600 leading-relaxed mb-6">
                Selamat datang di DOVEL, solusi terbaik untuk kebutuhan sewa alat camping yang praktis, lengkap, dan terpercaya. 
                Kami hadir untuk membantu para pecinta alam, traveler, maupun pemula yang ingin menikmati pengalaman berkemah 
                tanpa harus repot membeli perlengkapan sendiri. Dengan berbagai pilihan alat camping berkualitas, kami berkomitmen 
                memberikan kenyamanan dan keamanan dalam setiap perjalanan Anda.
            </p>
            <button class="bg-blue-500 text-white px-6 py-2 rounded">Book Now</button>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="px-10 grid grid-cols-2 gap-10 items-center">

        <!-- Text -->
        <div>
            <h3 class="text-xl font-bold mb-4">Why Choose Us ?</h3>
            <ol class="list-decimal ml-5 text-gray-700 space-y-2">
                <li>Peralatan lengkap (tenda, sleeping bag, kompor, dll)</li>
                <li>Kualitas terjamin dan selalu dicek sebelum disewa</li>
                <li>Harga bersahabat</li>
                <li>Mudah dalam pemesanan</li>
                <li>Cocok untuk pemula hingga profesional</li>
            </ol>

            <button class="mt-6 bg-blue-500 text-white px-6 py-2 rounded">
                Learn More
            </button>
        </div>

        <!-- Images kanan -->
        <div class="relative">
            <img src="/images/camp2.jpg" class="rounded-2xl shadow-lg">
            
            <img src="/images/camp3.jpg" class="absolute bottom-0 left-10 w-40 rounded-xl shadow-md border-4 border-white">
            <img src="/images/camp4.jpg" class="absolute bottom-0 right-10 w-40 rounded-xl shadow-md border-4 border-white">
        </div>
    </section>

    <!-- Review -->
    <section class="px-10 py-16 text-center">
        <h2 class="text-xl font-bold mb-10">Renter’s Review</h2>

        <div class="grid grid-cols-4 gap-6">

            <!-- Card -->
            <div class="border-2 border-blue-300 rounded-xl p-6 bg-white shadow">
                <img src="/images/user1.jpg" class="w-12 h-12 rounded-full mx-auto mb-3">
                <h4 class="font-semibold">Jane Cooper</h4>
                <p class="text-gray-500 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="border-2 border-blue-300 rounded-xl p-6 bg-white shadow">
                <img src="/images/user2.jpg" class="w-12 h-12 rounded-full mx-auto mb-3">
                <h4 class="font-semibold">Robert Fox</h4>
                <p class="text-gray-500 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="border-2 border-blue-300 rounded-xl p-6 bg-white shadow">
                <img src="/images/user3.jpg" class="w-12 h-12 rounded-full mx-auto mb-3">
                <h4 class="font-semibold">Wade Warren</h4>
                <p class="text-gray-500 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

            <div class="border-2 border-blue-300 rounded-xl p-6 bg-white shadow">
                <img src="/images/user4.jpg" class="w-12 h-12 rounded-full mx-auto mb-3">
                <h4 class="font-semibold">Albert Flores</h4>
                <p class="text-gray-500 text-sm mt-2">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>

        </div>
    </section>

</body>
</html>