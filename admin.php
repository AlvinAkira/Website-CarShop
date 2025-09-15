<?php
include "koneksi.php";

// function simpan mobil
function simpanMobil($koneksi)
{
  if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama'];
    $tahun      = $_POST['tahun'];
    $km         = $_POST['km'];
    $bahanBakar = $_POST['bahan_bakar'];
    $transmisi  = $_POST['transmisi'];
    $fitur      = $_POST['fitur'];
    $harga      = $_POST['harga'];
    $tag        = $_POST['tag'];
    $deskripsi  = $_POST['deskripsi']; // ✅ Menambahkan variabel deskripsi

    // ✅ simpan merek (checkbox multiple)
    $merek = "";
    if (!empty($_POST['merek'])) {
      $merek = implode(", ", $_POST['merek']);
    }

    // query insert ke database mobil
    $query = "INSERT INTO cars (nama, tahun, km, bahan_bakar, transmisi, fitur, harga, tag, merek, deskripsi) 
                  VALUES ('$nama', '$tahun', '$km', '$bahanBakar', '$transmisi', '$fitur', '$harga', '$tag', '$merek', '$deskripsi')";

    if (mysqli_query($koneksi, $query)) {
      // ambil id mobil yang baru disimpan
      $id_cars = mysqli_insert_id($koneksi);

      // folder upload
      $targetDir = "uploads/";
      if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
      }

      // inisialisasi nama file
      $g1 = $g2 = $g3 = $g4 = null;

      // upload gambar1
      if (!empty($_FILES['gambar1']['name'])) {
        $g1 = time() . "_1_" . basename($_FILES['gambar1']['name']);
        move_uploaded_file($_FILES['gambar1']['tmp_name'], $targetDir . $g1);
      }

      // upload gambar2
      if (!empty($_FILES['gambar2']['name'])) {
        $g2 = time() . "_2_" . basename($_FILES['gambar2']['name']);
        move_uploaded_file($_FILES['gambar2']['tmp_name'], $targetDir . $g2);
      }

      // upload gambar3
      if (!empty($_FILES['gambar3']['name'])) {
        $g3 = time() . "_3_" . basename($_FILES['gambar3']['name']);
        move_uploaded_file($_FILES['gambar3']['tmp_name'], $targetDir . $g3);
      }

      // upload gambar4
      if (!empty($_FILES['gambar4']['name'])) {
        $g4 = time() . "_4_" . basename($_FILES['gambar4']['name']);
        move_uploaded_file($_FILES['gambar4']['tmp_name'], $targetDir . $g4);
      }

      // simpan ke tabel images
      $sqlImg = "INSERT INTO images (id_cars, gambar1, gambar2, gambar3, gambar4) 
                       VALUES ('$id_cars', '$g1', '$g2', '$g3', '$g4')";
      mysqli_query($koneksi, $sqlImg);

      echo "<script>alert('Data mobil & gambar berhasil disimpan!'); window.location='admin.php';</script>";
    } else {
      echo "<script>alert('Gagal menyimpan data: " . mysqli_error($koneksi) . "');</script>";
    }
  }
}

// jalankan function jika ada POST
simpanMobil($koneksi);
?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin - CarShop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-200 font-sans">
  <!-- Navbar -->
  <nav class="bg-blue-600 text-white p-4 flex justify-between items-center shadow-md">
    <h1 class="text-xl font-bold flex items-center">
      <i class="fas fa-car mr-2"></i>Dashboard Admin CarShop
    </h1>
    <a href="logout.php" class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded-lg transition duration-200 flex items-center">
      <i class="fas fa-sign-out-alt mr-2"></i>Logout
    </a>
  </nav>

  <!-- Container -->
  <div class="p-6 max-w-7xl mx-auto">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800 flex items-center">
      <i class="fas fa-tasks mr-2 text-blue-500"></i>Kelola Data Mobil
    </h2>

    <!-- Form Section -->
    <div class="bg-white p-6 rounded-lg shadow-md mb-8">
      <h3 class="text-lg font-semibold mb-4 text-gray-700 border-b pb-2 flex items-center">
        <i class="fas fa-plus-circle mr-2 text-blue-500"></i>Tambah Mobil Baru
      </h3>
      
      <form action="" method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Nama Mobil</label>
          <input type="text" name="nama" placeholder="Contoh: Toyota Avanza" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
          <input type="number" name="tahun" placeholder="Contoh: 2022" min="1990" max="2030" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Kilometer</label>
          <input type="number" name="km" placeholder="Contoh: 15000" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
        </div>
        
        <div>
          <label class="block text-sm font-medium text-gray-700 mb-1">Harga (Rp)</label>
          <input type="number" name="harga" placeholder="Contoh: 250000000" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
        </div>
        
        <!-- Textarea Deskripsi - Span Full Width -->
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Deskripsi Mobil</label>
          <textarea name="deskripsi" rows="6" placeholder="Masukkan deskripsi lengkap mobil di sini..." class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required></textarea>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Bahan Bakar</label>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-2">
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="bahan_bakar" value="Bensin" class="mr-2 text-blue-500" required>
              <span>Bensin</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="bahan_bakar" value="Diesel" class="mr-2 text-blue-500">
              <span>Diesel</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="bahan_bakar" value="Hybrid" class="mr-2 text-blue-500">
              <span>Hybrid</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="bahan_bakar" value="Listrik" class="mr-2 text-blue-500">
              <span>Listrik</span>
            </label>
          </div>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Transmisi</label>
          <div class="grid grid-cols-2 gap-3 mt-2">
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="transmisi" value="Manual" class="mr-2 text-blue-500" required>
              <span>Manual</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="transmisi" value="Automatic" class="mr-2 text-blue-500">
              <span>Automatic</span>
            </label>
          </div>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Tipe Mobil</label>
          <div class="grid grid-cols-2 md:grid-cols-3 gap-3 mt-2">
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="fitur" value="SUV" class="mr-2 text-blue-500" required>
              <span>SUV</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="fitur" value="Sedan" class="mr-2 text-blue-500">
              <span>Sedan</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="fitur" value="MPV" class="mr-2 text-blue-500">
              <span>MPV</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="fitur" value="Hatchback" class="mr-2 text-blue-500">
              <span>Hatchback</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="radio" name="fitur" value="Sport" class="mr-2 text-blue-500">
              <span>Sport</span>
            </label>
          </div>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Merek Mobil</label>
          <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mt-2">
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Toyota" class="mr-2 text-blue-500">
              <span>Toyota</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Honda" class="mr-2 text-blue-500">
              <span>Honda</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Suzuki" class="mr-2 text-blue-500">
              <span>Suzuki</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Mitsubishi" class="mr-2 text-blue-500">
              <span>Mitsubishi</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Daihatsu" class="mr-2 text-blue-500">
              <span>Daihatsu</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Nissan" class="mr-2 text-blue-500">
              <span>Nissan</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="BMW" class="mr-2 text-blue-500">
              <span>BMW</span>
            </label>
            <label class="flex items-center p-3 border border-gray-300 rounded-lg hover:bg-gray-50 cursor-pointer transition">
              <input type="checkbox" name="merek[]" value="Mercedes" class="mr-2 text-blue-500">
              <span>Mercedes</span>
            </label>
          </div>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Tag</label>
          <select name="tag" class="w-full border border-gray-300 p-3 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition" required>
            <option value="">-- Pilih Tag --</option>
            <option value="Baru" class="p-2">Baru</option>
            <option value="Best Deal" class="p-2">Best Deal</option>
            <option value="Bekas" class="p-2">Bekas</option>
            <option value="Promo" class="p-2">Promo</option>
          </select>
        </div>
        
        <div class="md:col-span-2">
          <label class="block text-sm font-medium text-gray-700 mb-1">Upload Gambar (Maksimal 4)</label>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-2">
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
              <i class="fas fa-image text-gray-400 text-2xl mb-2"></i>
              <p class="text-sm text-gray-500 mb-2">Gambar 1</p>
              <input type="file" name="gambar1" accept="image/*" class="w-full text-sm">
            </div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
              <i class="fas fa-image text-gray-400 text-2xl mb-2"></i>
              <p class="text-sm text-gray-500 mb-2">Gambar 2</p>
              <input type="file" name="gambar2" accept="image/*" class="w-full text-sm">
            </div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
              <i class="fas fa-image text-gray-400 text-2xl mb-2"></i>
              <p class="text-sm text-gray-500 mb-2">Gambar 3</p>
              <input type="file" name="gambar3" accept="image/*" class="w-full text-sm">
            </div>
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center">
              <i class="fas fa-image text-gray-400 text-2xl mb-2"></i>
              <p class="text-sm text-gray-500 mb-2">Gambar 4</p>
              <input type="file" name="gambar4" accept="image/*" class="w-full text-sm">
            </div>
          </div>
        </div>
        
        <div class="md:col-span-2 mt-4">
          <button type="submit" name="simpan" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-lg transition duration-200 flex items-center justify-center">
            <i class="fas fa-save mr-2"></i>Simpan Mobil
          </button>
        </div>
      </form>
    </div>

    <!-- Tabel Data Mobil -->
    <div class="bg-white p-6 rounded-lg shadow-md">
      <h3 class="text-lg font-semibold mb-4 text-gray-700 border-b pb-2 flex items-center">
        <i class="fas fa-list mr-2 text-blue-500"></i>Daftar Mobil
      </h3>
      
      <div class="overflow-x-auto rounded-lg shadow">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-blue-600 text-white text-sm">
              <th class="p-3 text-left">Nama</th>
              <th class="p-3 text-left">Tahun</th>
              <th class="p-3 text-left">KM</th>
              <th class="p-3 text-left">Bahan Bakar</th>
              <th class="p-3 text-left">Transmisi</th>
              <th class="p-3 text-left">Tipe</th>
              <th class="p-3 text-left">Harga</th>
              <th class="p-3 text-left">Tag</th>
              <th class="p-3 text-left">Merek</th>
              <th class="p-3 text-left">Gambar</th>
              <th class="p-3 text-left">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT c.*, i.gambar1 FROM cars c 
                                             LEFT JOIN images i ON c.id_cars = i.id_cars");
            while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr class="hover:bg-gray-50 text-sm border-b border-gray-200">
                <td class="p-3 font-semibold text-gray-800"><?php echo $data['nama']; ?></td>
                <td class="p-3"><?php echo $data['tahun']; ?></td>
                <td class="p-3"><?php echo number_format($data['km']); ?> km</td>
                <td class="p-3"><?php echo $data['bahan_bakar']; ?></td>
                <td class="p-3"><?php echo $data['transmisi']; ?></td>
                <td class="p-3"><?php echo $data['fitur']; ?></td>
                <td class="p-3 font-bold text-blue-600">
                  Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?>
                </td>
                <td class="p-3">
                  <?php
                  $tagColor = "bg-gray-400";
                  if ($data['tag'] == "Baru") $tagColor = "bg-green-500";
                  elseif ($data['tag'] == "Best Deal") $tagColor = "bg-blue-500";
                  elseif ($data['tag'] == "Bekas") $tagColor = "bg-yellow-500";
                  elseif ($data['tag'] == "Promo") $tagColor = "bg-red-500";
                  ?>
                  <span class="px-2 py-1 rounded text-white text-xs <?php echo $tagColor; ?>">
                    <?php echo $data['tag']; ?>
                  </span>
                </td>
                <td class="p-3"><?php echo $data['merek']; ?></td>
                <td class="p-3">
                  <?php if (!empty($data['gambar1'])) { ?>
                    <img src="uploads/<?php echo $data['gambar1']; ?>" class="w-16 h-12 object-cover rounded shadow">
                  <?php } else { ?>
                    <span class="text-gray-400 text-xs">Belum ada</span>
                  <?php } ?>
                </td>
                <td class="p-3">
                  <div class="flex space-x-2">
                    <a href="cars_ubah.php?id=<?php echo $data['id_cars']; ?>"
                      class="bg-yellow-400 hover:bg-yellow-500 px-3 py-2 rounded text-xs font-medium text-white transition flex items-center">
                      <i class="fas fa-edit mr-1"></i> Edit
                    </a>
                    <a onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')"
                      href="cars_hapus.php?id=<?php echo $data['id_cars']; ?>"
                      class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded text-xs font-medium transition flex items-center">
                      <i class="fas fa-trash mr-1"></i> Hapus
                    </a>
                  </div>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>