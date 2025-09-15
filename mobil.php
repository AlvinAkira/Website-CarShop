<?php
include "koneksi.php"; // koneksi ke database

// Query join cars + images
$query = mysqli_query($koneksi, "
    SELECT cars.*, images.gambar1 
    FROM cars 
    LEFT JOIN images ON cars.id_cars = images.id_cars
");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarShop</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-blue-50">
    <!-- Navbar -->
    <nav class="bg-white border-blue-200 dark:bg-blue-600 shadow">
        <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="gambar/logo.jpg" class="h-8" alt="Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CarShop</span>
            </a>
            <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
                <a href="index.php"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-green-600 dark:hover:bg-green-700 focus:outline-none dark:focus:ring-green-800">
                    Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Filter Section -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-6 px-10 bg-blue-50">
        <div>
            <label class="block text-blue-700 text-sm font-medium mb-1">Tipe Mobil</label>
            <select
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Tipe</option>
                <option>SUV</option>
                <option>Sedan</option>
                <option>MPV</option>
                <option>Hatchback</option>
                <option>Sport</option>
            </select>
        </div>
        <div>
            <label class="block text-blue-700 text-sm font-medium mb-1">Merek</label>
            <select
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Merek</option>
                <option>Toyota</option>
                <option>Honda</option>
                <option>Suzuki</option>
                <option>Mitsubishi</option>
                <option>Daihatsu</option>
                <option>Nissan</option>
                <option>BMW</option>
                <option>Mercedes</option>
            </select>
        </div>
        <div>
            <label class="block text-blue-700 text-sm font-medium mb-1">Harga</label>
            <select
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Harga</option>
                <option>Dibawah 100 juta</option>
                <option>100-300 juta</option>
                <option>300-500 juta</option>
                <option>Diatas 500 juta</option>
            </select>
        </div>
        <div class="flex items-end">
            <button
                class="w-full bg-blue-600 hover:bg-green-700 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                Cari Mobil
            </button>
        </div>
    </div>

    <!-- Inventory Section -->
    <section id="inventory" class="py-16 bg-blue-50">
        <div class="container mx-auto px-6">
            <!-- Grid Card -->
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php while ($row = mysqli_fetch_assoc($query)) { ?>
                    <!-- Card Mobil -->
                    <div
                        class="bg-white rounded-xl overflow-hidden shadow-md transition duration-300 hover:shadow-lg flex flex-col">

                        <!-- Gambar -->
                        <div class="relative">
                            <img src="uploads/<?php echo !empty($row['gambar1']) ? $row['gambar1'] : 'default.jpg'; ?>"
                                alt="<?php echo $row['nama']; ?>"
                                class="w-full h-52 object-cover">

                            <?php if (!empty($row['tag'])) { ?>
                                <?php
                                // Tentukan warna berdasarkan tag
                                $tagClass = "bg-gray-500"; // default
                                if ($row['tag'] == "Baru") {
                                    $tagClass = "bg-green-500"; // hijau
                                } elseif ($row['tag'] == "Best Deal") {
                                    $tagClass = "bg-blue-500"; // biru
                                } elseif ($row['tag'] == "Bekas") {
                                    $tagClass = "bg-yellow-500"; // kuning
                                } elseif ($row['tag'] == "Promo") {
                                    $tagClass = "bg-red-500"; // merah
                                }
                                ?>
                                <span class="absolute top-4 left-4 <?php echo $tagClass; ?> text-white text-xs font-bold px-3 py-1 rounded-full shadow">
                                    <?php echo $row['tag']; ?>
                                </span>
                            <?php } ?>

                        </div>

                        <!-- Konten -->
                        <div class="p-5 flex flex-col justify-between flex-1">
                            <div>
                                <div class="flex justify-between items-start mb-2">
                                    <div>
                                        <h3
                                            class="text-lg font-bold text-gray-800 truncate max-w-[180px]">
                                            <?php echo $row['nama']; ?>
                                        </h3>
                                        <p class="text-gray-500 text-sm">
                                            <?php echo $row['tahun']; ?> •
                                            <?php echo number_format($row['km']); ?> km
                                        </p>
                                    </div>
                                    <span
                                        class="text-lg font-bold text-blue-600 whitespace-nowrap">
                                        Rp <?php echo number_format($row['harga'], 0, ',', '.'); ?>
                                    </span>
                                </div>

                                <!-- Info tambahan -->
                                <div class="mt-3 flex flex-wrap gap-2">
                                    <span
                                        class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">
                                        <?php echo $row['bahan_bakar']; ?>
                                    </span>
                                    <span
                                        class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">
                                        <?php echo $row['transmisi']; ?>
                                    </span>
                                    <span
                                        class="bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full">
                                        <?php echo $row['fitur']; ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Tombol -->
                            <div
                                class="mt-5 pt-4 border-t border-gray-100 flex justify-between items-center">
                                <button
                                    onclick="openModal('modal<?php echo $row['id_cars']; ?>')"
                                    class="text-blue-600 hover:text-blue-800 font-medium text-sm">
                                    Lihat Detail
                                </button>
                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-medium py-2 px-4 rounded-lg transition duration-200">
                                    Ajukan
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <script src="java.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>