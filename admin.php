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

    // ✅ simpan merek (checkbox multiple)
    $merek = "";
    if (!empty($_POST['merek'])) {
      $merek = implode(", ", $_POST['merek']);
    }

    // query insert ke database mobil
    $query = "INSERT INTO cars (nama, tahun, km, bahan_bakar, transmisi, fitur, harga, tag, merek) 
                  VALUES ('$nama', '$tahun', '$km', '$bahanBakar', '$transmisi', '$fitur', '$harga', '$tag', '$merek')";

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
</head>

<body class="bg-blue-100 font-sans">
  <!-- Navbar -->
  <nav class="bg-blue-600 text-white p-4 flex justify-between">
    <h1 class="text-xl font-bold">Dashboard Admin</h1>
    <a href="logout.php" class="bg-red-500 px-4 py-2 rounded-lg">Logout</a>
  </nav>

  <!-- Container -->
  <div class="p-6">
    <h2 class="text-2xl font-semibold mb-4">Kelola Data Mobil</h2>

    <form action="" method="post" enctype="multipart/form-data" class="grid grid-cols-2 gap-4">
      <input type="text" name="nama" placeholder="Nama Mobil" class="border p-2 rounded" required>
      <input type="number" name="tahun" placeholder="Tahun" class="border p-2 rounded" required>
      <input type="number" name="km" placeholder="Kilometer" class="border p-2 rounded" required>

      <!-- Bahan Bakar -->
      <div class="col-span-2">
        <label class="block font-semibold mb-1">Bahan Bakar:</label>
        <div class="flex gap-6">
          <label><input type="radio" name="bahan_bakar" value="Bensin" class="mr-2" required>Bensin</label>
          <label><input type="radio" name="bahan_bakar" value="Diesel" class="mr-2">Diesel</label>
          <label><input type="radio" name="bahan_bakar" value="Hybrid" class="mr-2">Hybrid</label>
          <label><input type="radio" name="bahan_bakar" value="Listrik" class="mr-2">Listrik</label>
        </div>
      </div>

      <!-- Transmisi -->
      <div class="col-span-2">
        <label class="block font-semibold mb-1">Transmisi:</label>
        <div class="flex gap-6">
          <label><input type="radio" name="transmisi" value="Manual" class="mr-2" required>Manual</label>
          <label><input type="radio" name="transmisi" value="Automatic" class="mr-2">Automatic</label>
        </div>
      </div>

      <!-- tipe mobil -->
      <div class="col-span-2">
        <label class="block font-semibold mb-1">Tipe Mobil:</label>
        <div class="flex flex-wrap gap-4">
          <label><input type="radio" name="fitur" value="SUV" class="mr-2" required>SUV</label>
          <label><input type="radio" name="fitur" value="Sedan" class="mr-2">Sedan</label>
          <label><input type="radio" name="fitur" value="MPV" class="mr-2">MPV</label>
          <label><input type="radio" name="fitur" value="Hatchback" class="mr-2">Hatchback</label>
          <label><input type="radio" name="fitur" value="Sport" class="mr-2">Sport</label>
        </div>
      </div>

      <!-- ✅ Merek Mobil -->
      <div class="col-span-2">
        <label class="block font-semibold mb-1">Merek Mobil:</label>
        <div class="flex flex-wrap gap-4">
          <label><input type="checkbox" name="merek" value="Toyota" class="mr-2">Toyota</label>
          <label><input type="checkbox" name="merek" value="Honda" class="mr-2">Honda</label>
          <label><input type="checkbox" name="merek" value="Suzuki" class="mr-2">Suzuki</label>
          <label><input type="checkbox" name="merek" value="Mitsubishi" class="mr-2">Mitsubishi</label>
          <label><input type="checkbox" name="merek" value="Daihatsu" class="mr-2">Daihatsu</label>
          <label><input type="checkbox" name="merek" value="Nissan" class="mr-2">Nissan</label>
          <label><input type="checkbox" name="merek" value="BMW" class="mr-2">BMW</label>
          <label><input type="checkbox" name="merek" value="Mercedes" class="mr-2">Mercedes</label>
        </div>
      </div>

      <input type="number" name="harga" placeholder="Harga (Rp)" class="border p-2 rounded" required>

      <!-- Tag option -->
      <select name="tag" class="border p-2 rounded" required>
        <option value="">-- Pilih Tag --</option>
        <option value="Baru">Baru</option>
        <option value="Best Deal">Best Deal</option>
        <option value="Bekas">Bekas</option>
        <option value="Promo">Promo</option>
      </select>

      <!-- Upload 4 gambar -->
      <input type="file" name="gambar1" accept="image/*" class="border p-2 rounded col-span-2 bg-gray-100">
      <input type="file" name="gambar2" accept="image/*" class="border p-2 rounded col-span-2 bg-gray-100">
      <input type="file" name="gambar3" accept="image/*" class="border p-2 rounded col-span-2 bg-gray-100">
      <input type="file" name="gambar4" accept="image/*" class="border p-2 rounded col-span-2 bg-gray-100">

      <button type="submit" name="simpan" class="col-span-2 bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
        Simpan
      </button>
    </form>
    <br>

    <!-- Tabel Data Mobil -->
    <div class="bg-white p-6 rounded-lg shadow">
      <h3 class="text-lg font-semibold mb-3">Daftar Mobil</h3>
      <div class="overflow-x-auto">
        <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
          <thead>
            <tr class="bg-blue-600 text-white text-sm">
              <th class="p-3 border">Nama</th>
              <th class="p-3 border">Tahun</th>
              <th class="p-3 border">KM</th>
              <th class="p-3 border">Bahan Bakar</th>
              <th class="p-3 border">Transmisi</th>
              <th class="p-3 border">Tipe</th>
              <th class="p-3 border">Harga</th>
              <th class="p-3 border">Tag</th>
              <th class="p-3 border">Merek</th>
              <th class="p-3 border">Gambar</th>
              <th class="p-3 border">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = mysqli_query($koneksi, "SELECT c.*, i.gambar1 FROM cars c 
                                             LEFT JOIN images i ON c.id_cars = i.id_cars");
            while ($data = mysqli_fetch_array($query)) {
            ?>
              <tr class="hover:bg-gray-100 text-sm">
                <td class="p-3 border font-semibold text-gray-800"><?php echo $data['nama']; ?></td>
                <td class="p-3 border"><?php echo $data['tahun']; ?></td>
                <td class="p-3 border"><?php echo number_format($data['km']); ?> km</td>
                <td class="p-3 border"><?php echo $data['bahan_bakar']; ?></td>
                <td class="p-3 border"><?php echo $data['transmisi']; ?></td>
                <td class="p-3 border"><?php echo $data['fitur']; ?></td>
                <td class="p-3 border font-bold text-blue-600">
                  Rp <?php echo number_format($data['harga'], 0, ',', '.'); ?>
                </td>
                <td class="p-3 border">
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
                <td class="p-3 border"><?php echo $data['merek']; ?></td>
                <td class="p-3 border">
                  <?php if (!empty($data['gambar1'])) { ?>
                    <img src="uploads/<?php echo $data['gambar1']; ?>" class="w-20 h-14 object-cover rounded">
                  <?php } else { ?>
                    <span class="text-gray-400 text-xs">Belum ada</span>
                  <?php } ?>
                </td>
                <td class="p-3 border flex gap-2">
                  <a href="cars_ubah.php?id=<?php echo $data['id_cars']; ?>"
                    class="bg-yellow-400 hover:bg-yellow-500 px-2 py-1 rounded text-xs font-medium">Edit</a>
                  <a onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')"
                    href="cars_hapus.php?id=<?php echo $data['id_cars']; ?>"
                    class="bg-red-500 hover:bg-red-600 text-white px-2 py-1 rounded text-xs font-medium">Hapus</a>
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
