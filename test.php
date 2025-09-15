<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-600">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="gambar/logo.jpg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CarShop</span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
                <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>
                <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
                <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                    <li>
                        <a href="#" class="block py-2 px-3 text-blue-600 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Layanan</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Search Section -->

    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-6 pl-10 pr-10">
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Tipe Mobil</label>
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Tipe</option>
                <option>SUV</option>
                <option>Sedan</option>
                <option>MPV</option>
                <option>Hatchback</option>
                <option>Sport</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Merek</label>
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Merek</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Suzuki</option>
                <option>Mitsubishi</option>
                <option>Daihatsu</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 text-sm font-medium mb-1">Harga</label>
            <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Harga</option>
                <option>Dibawah 100 juta</option>
                <option>100-300 juta</option>
                <option>300-500 juta</option>
                <option>Diatas 500 juta</option>
            </select>
        </div>
        <div class="flex items-end">
            <button
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">Cari
                Mobil</button>
        </div>
    </div>
    </div>

    <!-- Inventory Section -->
    <section id="inventory" class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car Item 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md car-card transition duration-300">
                    <div class="relative">
                        <img src="gambar/fortuner.jpeg"
                            alt="Toyota Fortuner TRD Sportivo 2021 warna hitam dengan interior kulit hitam, kondisi seperti baru"
                            class="w-full h-56 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">Baru
                            Datang</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Toyota Fortuner TRD</h3>
                                <p class="text-gray-600">2021 • 25.000 km</p>
                            </div>
                            <span class="text-xl font-bold text-blue-600">Rp 680jt</span>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">SUV</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Diesel</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Automatic</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">7 Seater</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <!-- Tombol buka modal -->
                            <button onclick="openModal('fortunerModal')"
                                class="text-blue-600 hover:text-blue-800 font-medium">
                                Lihat Detail
                            </button>

                            <button
                                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded-lg transition duration-200">
                                Ajukan Penawaran
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal Detail -->
                <div id="fortunerModal"
                    class="fixed inset-0 hidden bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div class="bg-white w-full max-w-2xl rounded-xl shadow-lg p-6 relative 
                max-h-screen overflow-y-auto">

                        <!-- Tombol close -->
                        <button onclick="closeModal('fortunerModal')"
                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-2xl">&times;</button>

                        <img src="gambar/fortuner.jpeg" alt="Toyota Fortuner TRD 2021"
                            class="w-full h-64 object-cover rounded-lg">

                        <h1 class="text-2xl font-bold text-gray-800 mt-4">Toyota Fortuner TRD Sportivo 2021</h1>
                        <p class="text-gray-600">Warna Hitam • 25.000 km • Automatic • Diesel</p>
                        <p class="text-2xl font-bold text-blue-600 mt-2">Rp 680.000.000</p>

                        <h2 class="text-lg font-semibold mt-6">Spesifikasi</h2>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>Mesin: 2.4L Diesel Turbo</li>
                            <li>Transmisi: Automatic 6 Speed</li>
                            <li>Kapasitas: 7 Penumpang</li>
                            <li>Interior: Kulit Hitam Premium</li>
                            <li>Kondisi: Seperti Baru, Service Rutin</li>
                            <!-- Tambah konten panjang untuk tes scroll -->
                            <li>Fitur: Cruise Control</li>
                            <li>Fitur: Sunroof</li>
                            <li>Fitur: Kamera 360</li>
                            <li>Fitur: Blind Spot Monitoring</li>
                            <li>Fitur: Audio JBL Premium</li>
                            <li>Dan lain-lain...</li>
                        </ul>

                        <div class="mt-6 flex gap-3 pb-4">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                Hubungi Penjual
                            </button>
                            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                                Ajukan Penawaran
                            </button>
                        </div>
                    </div>
                </div>


                <!-- Car Item 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md car-card transition duration-300">
                    <div class="relative">
                        <img src="gambar/turbo.jpg"
                            alt="Honda Civic Turbo RS 2022 warna putih mutiara dengan velg racing orisinil"
                            class="w-full h-56 object-cover">
                        <span
                            class="absolute top-4 left-4 bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">Best
                            Deal</span>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-bold text-gray-800">Honda Civic Turbo</h3>
                                <p class="text-gray-600">2022 • 12.500 km</p>
                            </div>
                            <span class="text-xl font-bold text-blue-600">Rp 560jt</span>
                        </div>
                        <div class="mt-4 flex flex-wrap gap-2">
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Sedan</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Bensin</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">CVT</span>
                            <span class="bg-gray-100 text-gray-800 text-xs px-3 py-1 rounded-full">Full Options</span>
                        </div>
                        <div class="mt-6 pt-4 border-t border-gray-100 flex justify-between items-center">
                            <button onclick="openModal('civicModal')"
                                class="text-blue-600 hover:text-blue-800 font-medium">
                                Lihat Detail
                            </button>
                            <button
                                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded-lg transition duration-200">
                                Ajukan Penawaran
                            </button>
                        </div>
                    </div>
                </div>

                <div id="civicModal"
                    class="fixed inset-0 hidden bg-black bg-opacity-50 flex items-center justify-center z-50">
                    <div
                        class="bg-white w-full max-w-2xl rounded-xl shadow-lg p-6 relative max-h-screen overflow-y-auto">

                        <!-- Tombol close -->
                        <button onclick="closeModal('civicModal')"
                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900 text-2xl">&times;</button>

                        <img src="gambar/turbo.jpg" alt="Honda Civic Turbo RS 2022"
                            class="w-full h-64 object-cover rounded-lg">

                        <h1 class="text-2xl font-bold text-gray-800 mt-4">Honda Civic Turbo RS 2022</h1>
                        <p class="text-gray-600">Warna Putih Mutiara • 12.500 km • CVT • Bensin</p>
                        <p class="text-2xl font-bold text-blue-600 mt-2">Rp 560.000.000</p>

                        <h2 class="text-lg font-semibold mt-6">Spesifikasi</h2>
                        <ul class="list-disc pl-5 text-gray-700 space-y-1">
                            <li>Mesin: 1.5L Turbocharged</li>
                            <li>Transmisi: CVT dengan Paddle Shift</li>
                            <li>Velg Racing Orisinil</li>
                            <li>Interior: Kulit Hitam</li>
                            <li>Fitur: Honda Sensing, LaneWatch, Sunroof</li>
                            <li>Kondisi: Sangat Mulus, Servis Resmi Honda</li>
                        </ul>

                        <div class="mt-6 flex gap-3 pb-4">
                            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                                Hubungi Penjual
                            </button>
                            <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg">
                                Ajukan Penawaran
                            </button>
                        </div>
                    </div>
                </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="java.js"></script>
</body>

</html>