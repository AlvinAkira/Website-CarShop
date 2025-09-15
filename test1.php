<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoPremium - Jual Beli Mobil Terbaik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#2563eb',
                        secondary: '#64748b',
                        dark: '#1e293b',
                        accent: '#f59e0b',
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80');
            background-size: cover;
            background-position: center;
        }
        .car-card {
            transition: transform 0.3s ease;
        }
        .car-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Header/Navigation -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <h1 class="text-2xl font-bold text-primary">AutoPremium</h1>
                </div>
                
                <nav class="hidden md:flex space-x-8">
                    <a href="#" class="text-gray-700 hover:text-primary transition-colors">Beranda</a>
                    <a href="#cars" class="text-gray-700 hover:text-primary transition-colors">Mobil</a>
                    <a href="#services" class="text-gray-700 hover:text-primary transition-colors">Layanan</a>
                    <a href="#testimonials" class="text-gray-700 hover:text-primary transition-colors">Testimonial</a>
                    <a href="#contact" class="text-gray-700 hover:text-primary transition-colors">Kontak</a>
                </nav>
                
                <div class="md:hidden">
                    <button class="text-gray-700">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-bg py-20 text-white">
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-2xl">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">Temukan Mobil Impian Anda dengan Harga Terbaik</h1>
                <p class="text-lg mb-8">Lebih dari 1000+ mobil berkualitas siap menjadi partner perjalanan Anda. Proses mudah dan transparan dengan garansi terjamin.</p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#cars" class="bg-primary hover:bg-blue-700 text-white font-medium py-3 px-8 rounded-lg transition-colors flex items-center">
                        Lihat Katalog
                        <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    <a href="#contact" class="border-2 border-white text-white hover:bg-white hover:text-blue-600 font-medium py-3 px-8 rounded-lg transition-colors">
                        Konsultasi Gratis
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Search & Filter Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Cari Mobil Ideal Anda</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div class="relative md:col-span-2">
                        <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text" placeholder="Cari merek atau model mobil..." class="w-full border border-gray-300 rounded-lg pl-10 pr-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                    </div>
                    
                    <select class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>Semua Harga</option>
                        <option>Di bawah Rp 300jt</option>
                        <option>Rp 300-600jt</option>
                        <option>Rp 600-900jt</option>
                        <option>Di atas Rp 900jt</option>
                    </select>
                    
                    <select class="border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">
                        <option>Semua Tipe</option>
                        <option>SUV</option>
                        <option>Sedan</option>
                        <option>Hatchback</option>
                        <option>MPV</option>
                        <option>Sport</option>
                    </select>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Cars Section -->
    <section id="cars" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Mobil Pilihan</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan berbagai pilihan mobil berkualitas dengan kondisi terbaik dan harga kompetitif</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Car 1 -->
                <div class="car-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Toyota Fortuner hitam dengan desain modern dan stylish" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm">
                            SUV
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Toyota Fortuner</h3>
                        <p class="text-gray-600 mb-4">Tahun 2023 • Automatic • Diesel</p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jarak Tempuh</span>
                                <span class="font-medium">15.000 km</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transmisi</span>
                                <span class="font-medium">Automatic</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bahan Bakar</span>
                                <span class="font-medium">Diesel</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="text-2xl font-bold text-primary">Rp 520.000.000</div>
                            <button class="bg-primary hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 2 -->
                <div class="car-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1549399542-7e82138ddea2?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Honda Civic RS merah sporty dengan garis bodi yang dinamis" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm">
                            Sedan
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Honda Civic RS</h3>
                        <p class="text-gray-600 mb-4">Tahun 2023 • Automatic • Bensin</p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jarak Tempuh</span>
                                <span class="font-medium">12.500 km</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transmisi</span>
                                <span class="font-medium">Automatic</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bahan Bakar</span>
                                <span class="font-medium">Bensin</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="text-2xl font-bold text-primary">Rp 610.000.000</div>
                            <button class="bg-primary hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Car 3 -->
                <div class="car-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1623334044303-241021148842?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Mitsubishi Xpander putih dengan desain modern dan interior luas" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-primary text-white px-3 py-1 rounded-full text-sm">
                            MPV
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">Mitsubishi Xpander</h3>
                        <p class="text-gray-600 mb-4">Tahun 2023 • Automatic • Bensin</p>
                        
                        <div class="space-y-2 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Jarak Tempuh</span>
                                <span class="font-medium">18.000 km</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Transmisi</span>
                                <span class="font-medium">Automatic</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Bahan Bakar</span>
                                <span class="font-medium">Bensin</span>
                            </div>
                        </div>
                        
                        <div class="flex justify-between items-center">
                            <div class="text-2xl font-bold text-primary">Rp 280.000.000</div>
                            <button class="bg-primary hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-colors">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="#" class="border-2 border-primary text-primary hover:bg-primary hover:text-white font-medium py-3 px-8 rounded-lg transition-colors inline-block">
                    Lihat Semua Mobil
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Layanan terbaik untuk pengalaman beli mobil yang menyenangkan dan tanpa khawatir</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <i class="fas fa-shield-alt text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Garansi Terjamin</h3>
                    <p class="text-gray-600">Semua mobil kami datang dengan garansi komprehensif untuk peace of mind Anda</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <i class="fas fa-clock text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Proses Cepat</h3>
                    <p class="text-gray-600">Proses pembelian dan pengurusan dokumen hanya membutuhkan waktu 1-2 hari</p>
                </div>

                <div class="text-center p-6 bg-gray-50 rounded-lg">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-100 rounded-full mb-4">
                        <i class="fas fa-star text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Kualitas Terbaik</h3>
                    <p class="text-gray-600">Hanya mobil dengan kondisi terbaik yang kami jual, melalui inspeksi ketat</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Apa Kata Pelanggan Kami</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Ribuan pelanggan telah mempercayakan pembelian mobil mereka kepada kami</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Pelayanan sangat memuaskan! Mobil yang saya beli kondisi sangat bagus dan harga bersaing."</p>
                    <div>
                        <div class="font-semibold">Budi Santoso</div>
                        <div class="text-sm text-gray-500">Business Owner</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Proses pembelian mudah dan cepat. Staffnya sangat membantu dalam memilih mobil yang tepat."</p>
                    <div>
                        <div class="font-semibold">Sari Wijaya</div>
                        <div class="text-sm text-gray-500">Professional</div>
                    </div>
                </div>

                <div class="bg-white rounded-lg p-6">
                    <div class="flex justify-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 italic mb-4">"Setelah compare beberapa dealer, akhirnya beli di sini. Tidak menyesal!"</p>
                    <div>
                        <div class="font-semibold">Ahmad Rizki</div>
                        <div class="text-sm text-gray-500">Entrepreneur</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Siap Memiliki Mobil Impian?</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">Hubungi kami sekarang untuk konsultasi gratis dan dapatkan penawaran terbaik</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#contact" class="bg-white text-primary hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition-colors">
                    Hubungi Sekarang
                </a>
                <a href="#cars" class="border-2 border-white text-white hover:bg-white hover:text-primary font-medium py-3 px-8 rounded-lg transition-colors">
                    Lihat Katalog Lengkap
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold mb-4">AutoPremium</h3>
                    <p class="text-gray-400 mb-4">Dealer mobil terpercaya dengan berbagai pilihan kendaraan berkualitas dan layanan purna jual terbaik.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Kontak Kami</h4>
                    <div class="space-y-2">
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-3"></i>
                            <span class="text-gray-400">+62 21 1234 5678</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3"></i>
                            <span class="text-gray-400">Jl. Sudirman No. 123, Jakarta</span>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock mr-3"></i>
                            <span class="text-gray-400">Senin - Sabtu: 9:00 - 17:00</span>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                        <li><a href="#cars" class="text-gray-400 hover:text-white">Mobil</a></li>
                        <li><a href="#services" class="text-gray-400 hover:text-white">Layanan</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimonial</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white">Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>© 2024 AutoPremium. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
