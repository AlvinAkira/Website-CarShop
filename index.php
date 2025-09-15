<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarShop - Jual Beli Mobil Terpercaya</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
   <nav class="fixed top-0 left-0 w-full z-50 bg-white border-blue-200 dark:bg-blue-600 shadow-md">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="gambar/logo.jpg" class="h-8" alt="CarShop Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CarShop</span>
        </a>
        
        <div id="mega-menu"
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <li>
                    <a href="#home"
                        class="block py-2 px-3 text-blue-900 hover:text-green-600 md:p-0 dark:text-white">Home</a>
                </li>
                <li>
                    <a href="#layanan"
                        class="block py-2 px-3 text-blue-900 hover:text-green-600 md:p-0 dark:text-white">Layanan</a>
                </li>
                <li>
                    <a href="#tentang_kami"
                        class="block py-2 px-3 text-blue-900 hover:text-green-600 md:p-0 dark:text-white">Tentang Kami</a>
                </li>
                <li>
                    <a href="#kontak"
                        class="block py-2 px-3 text-blue-900 hover:text-green-600 md:p-0 dark:text-white">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>




    <!-- Hero Section -->
<section class="relative bg-cover bg-center h-[90vh]" style="background: #302dcf;
background: linear-gradient(183deg,rgba(48, 45, 207, 1) 0%, rgba(12, 12, 128, 1) 0%, rgba(59, 59, 247, 1) 100%);">
    <!-- Overlay -->
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>

    <!-- Konten -->
    <div class="relative z-10 flex pt-20 flex-col items-center justify-center h-full text-center text-white px-6" id="home">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Temukan Mobil Impian Anda</h1>
        <p class="text-lg md:text-xl mb-6 max-w-2xl">
            CarShop menyediakan pilihan mobil terbaik, mulai dari SUV, Sedan, MPV hingga Sport Car. 
            Dapatkan mobil idaman dengan harga terbaik dan terpercaya.
        </p>
        <div class="flex space-x-4">
            <a href="mobil.php"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg transition duration-300">
                Lihat Mobil
            </a>
        </div>
    </div>
</section>

<!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="container mx-auto px-6" id="tentang_kami">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Tentang CarShop</h2>
                    <p class="text-gray-600 mb-6">CarShop didirikan pada tahun 2015 dengan visi untuk menjadi platform
                        jual beli mobil bekas terpercaya di Indonesia dengan standar kualitas tertinggi.</p>
                    <p class="text-gray-600 mb-6">Kami memiliki tim ahli yang telah berpengalaman lebih dari 10 tahun di
                        industri otomotif yang siap memberikan rekomendasi terbaik sesuai kebutuhan Anda.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-3xl font-bold text-blue-600 mb-1">5000+</h3>
                            <p class="text-gray-600 text-sm">Mobil Terjual</p>
                        </div>
                        <div class="bg-gray-50 p-4 rounded-lg">
                            <h3 class="text-3xl font-bold text-blue-600 mb-1">98%</h3>
                            <p class="text-gray-600 text-sm">Kepuasan Pelanggan</p>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <img src="gambar/Mitsubishi Xpander HEV - TH version 2024.jpeg"
                        alt="Tim CarShop berdiri di depan showroom dengan berbagai mobil bekas berkualitas"
                        class="w-full rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>

   <!-- Services Section -->
    <section id="services" class="py-16 bg-blue-600">
        <div class="container mx-auto px-6" id="layanan">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-50 mb-4">Layanan Kami</h2>
                <p class="text-gray-50 max-w-2xl mx-auto">Kami memberikan solusi lengkap untuk kebutuhan mobil bekas
                    Anda</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-blue-100 p-4 rounded-full">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Inspeksi Lengkap</h3>
                    <p class="text-gray-600 text-center">Setiap mobil melalui pemeriksaan menyeluruh oleh mekanik
                        profesional untuk memastikan kualitas.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-green-100 p-4 rounded-full">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Garansi Terbatas</h3>
                    <p class="text-gray-600 text-center">Dapatkan perlindungan selama 3 bulan untuk komponen utama
                        setelah pembelian.</p>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300">
                    <div class="flex justify-center mb-4">
                        <div class="bg-yellow-100 p-4 rounded-full">
                            <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 text-center mb-3">Pengurusan BPKB</h3>
                    <p class="text-gray-600 text-center">Kami bantu pengurusan dokumen termasuk BPKB, STNK dan balik
                        nama ke pemilik baru.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">Mengapa Memilih CarShop?</h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Proses Transparan</h3>
                                <p class="text-gray-600">Semua detail mobil termasuk riwayat servis dan kondisi aktual
                                    diungkap secara jujur.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Harga Kompetitif</h3>
                                <p class="text-gray-600">Harga sesuai pasar dengan penawaran spesial untuk pembelian
                                    tunai.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="bg-blue-100 p-2 rounded-full mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800 mb-1">Pembiayaan Mudah</h3>
                                <p class="text-gray-600">Kerjasama dengan berbagai bank dan lembaga keuangan untuk
                                    memudahkan kredit mobil.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Penilaian Mobil Anda</h3>
                        <p class="text-gray-600 mb-6">Ingin menjual mobil Anda? Kami memberikan penawaran harga terbaik
                            berdasarkan kondisi aktual mobil.</p>

                        <form>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Merek & Tipe Mobil</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Contoh: Toyota Avanza">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Tahun</label>
                                <input type="number"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    placeholder="Tahun mobil">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Kondisi</label>
                                <select
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    <option>Pilih kondisi</option>
                                    <option>Bagus</option>
                                    <option>Sedang</option>
                                    <option>Butuh perbaikan</option>
                                </select>
                            </div>

                            <button
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300">Minta
                                Penilaian</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Apa Kata Pelanggan Kami</h2>
                <p class="max-w-2xl mx-auto opacity-90">Ribuan pelanggan telah mempercayakan pembelian mobil mereka pada
                    CarShop</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="testimonial-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="gambar/profil.jpeg" alt="Foto pak Budi, pengusaha 45 tahun dengan kemeja biru"
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Budi Santoso</h4>
                            <p class="text-sm opacity-80">Pengusaha, Jakarta</p>
                        </div>
                    </div>
                    <p class="opacity-90">"Prosesnya sangat transparan dan mobil yang saya dapatkan sesuai dengan
                        deskripsi. Recommended!"</p>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="gambar/profil.jpeg" alt="Foto ibu Siti, ibu rumah tangga 35 tahun dengan hijab biru"
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Siti Rahmawati</h4>
                            <p class="text-sm opacity-80">Ibu Rumah Tangga, Bandung</p>
                        </div>
                    </div>
                    <p class="opacity-90">"Pelayanannya ramah dan mobilnya sangat terawat. Sudah 6 bulan pakai tidak ada
                        masalah."</p>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card p-6 rounded-lg">
                    <div class="flex items-center mb-4">
                        <img src="gambar/profil.jpeg" alt="Foto mas Andi, karyawan 30 tahun dengan kacamata"
                            class="w-12 h-12 rounded-full object-cover mr-4">
                        <div>
                            <h4 class="font-bold">Andi Setiawan</h4>
                            <p class="text-sm opacity-80">Karyawan, Surabaya</p>
                        </div>
                    </div>
                    <p class="opacity-90">"Proses kreditnya cepat disetujui dan harga kompetitif. Puas belanja mobil di
                        CarShop."</p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- Contact Section -->
    <section id="kontak" class="py-16 bg-blue-600">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-50 mb-4">Hubungi Kami</h2>
                <p class="text-gray-50 max-w-2xl mx-auto">Tim kami siap membantu Anda menemukan mobil impian atau
                    memberikan penilaian untuk mobil yang ingin dijual.</p>
            </div>

            <div class="flex flex-col lg:flex-row">
                <div class="lg:w-1/2 mb-8 lg:mb-0 lg:pr-12">
                    <div class="bg-white p-8 rounded-xl shadow-lg">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>

                        <form>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Nama Lengkap</label>
                                <input type="text"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                                <input type="email"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Nomor Telepon</label>
                                <input type="tel"
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-medium mb-2">Pesan</label>
                                <textarea
                                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                    rows="4"></textarea>
                            </div>

                            <button
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 rounded-lg transition duration-300">Kirim
                                Pesan</button>
                        </form>
                    </div>
                </div>

                <div class="lg:w-1/2">
                    <div class="bg-white p-8 rounded-xl shadow-lg h-full">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Info Kontak</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Alamat</h4>
                                    <p class="text-gray-600">Jl. Sudirman No. 123, Lampung Timur, Lampung 2025</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Telepon</h4>
                                    <p class="text-gray-600">021-23456789</p>
                                    <p class="text-gray-600">0812-3456-7890 (WhatsApp)</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-blue-100 p-2 rounded-full mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="text-lg font-semibold text-gray-800 mb-1">Email</h4>
                                    <p class="text-gray-600">info@CarShop.id</p>
                                    <p class="text-gray-600">cs@CarShop.id</p>
                                </div>
                            </div>

                            <div class="pt-6 border-t border-gray-200">
                                <h4 class="text-lg font-semibold text-gray-800 mb-4">Jam Operasional</h4>
                                <div class="space-y-2">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Senin-Jumat</span>
                                        <span class="font-medium">09:00 - 17:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Sabtu</span>
                                        <span class="font-medium">09:00 - 15:00</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Minggu/Hari Besar</span>
                                        <span class="font-medium">Libur</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-8 md:mb-0">
                    <div class="flex items-center space-x-4 mb-6">
                        <img src="gambar/logo.jpg" alt="Logo kecil CarShop dengan ikon mobil" class="h-10">
                        <span class="text-xl font-bold">CarShop</span>
                    </div>
                    <p class="text-gray-400 max-w-md">Platform terpercaya untuk jual beli mobil bekas berkualitas dengan
                        proses aman dan transparan.</p>
                </div>

                <div class="w-full md:w-auto">
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div>
                            <h3 class="font-bold text-lg mb-4">Perusahaan</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tentang
                                        Kami</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Tim
                                        Kami</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Karir</a>
                                </li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Blog</a>
                                </li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg mb-4">Layanan</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Jual
                                        Mobil</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Beli
                                        Mobil</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kredit
                                        Mobil</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Inspeksi
                                        Mobil</a></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg mb-4">Bantuan</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">FAQ</a>
                                </li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Hubungi
                                        Kami</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Syarat &
                                        Ketentuan</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white transition duration-300">Kebijakan
                                        Privasi</a></li>
                            </ul>
                        </div>

                        <div>
                            <h3 class="font-bold text-lg mb-4">Social Media</h3>
                            <div class="flex space-x-4">
                                <a href="#"
                                    class="bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-gray-800 hover:bg-gray-700 p-2 rounded-full transition duration-300">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0C8.74 0 8.333.015 7.053.072 2.695.272.273 2.69.073 7.052.013 8.333 0 8.74 0 12c0 3.26.015 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.28.058 1.685.072 4.948.072 3.26 0 3.668-.015 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.685.073-4.948 0-3.26-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.013 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 3.252.2 4.771 1.699 4.919 4.919.058 1.28.072 1.645.072 4.85 0 3.204-.015 3.585-.072 4.85-.149 3.225-1.664 4.719-4.919 4.919-1.28.058-1.645.072-4.85.072-3.204 0-3.586-.014-4.85-.072-3.26-.2-4.771-1.699-4.919-4.92-.057-1.28-.072-1.646-.072-4.85 0-3.204.014-3.586.072-4.851.149-3.225 1.664-4.719 4.919-4.919 1.28-.057 1.645-.072 4.85-.072zM12 3.66c-4.634 0-8.34 3.706-8.34 8.34 0 4.633 3.706 8.34 8.34 8.34 4.632 0 8.34-3.707 8.34-8.34 0-4.634-3.708-8.34-8.34-8.34zm0 13.78c-3.003 0-5.44-2.437-5.44-5.44 0-3.002 2.437-5.44 5.44-5.44 3.002 0 5.44 2.438 5.44 5.44 0 3.003-2.438 5.44-5.44 5.44z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-8 mt-8 border-t border-gray-800 text-center text-gray-400 text-sm">
                <p>© 2023 CarShop. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="java.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>


</body>

</html>