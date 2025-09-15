<?php
include "koneksi.php";

// ambil data berdasarkan id
$id = $_GET['id'];
$q = mysqli_query($koneksi, "SELECT c.*, i.gambar1, i.gambar2, i.gambar3, i.gambar4 
                             FROM cars c 
                             LEFT JOIN images i ON c.id_cars = i.id_cars 
                             WHERE c.id_cars='$id'");
$data = mysqli_fetch_assoc($q);

if (!$data) {
  echo "<script>alert('Data tidak ditemukan'); window.location='admin.php';</script>";
  exit;
}

// update mobil
if (isset($_POST['update'])) {
  $nama       = $_POST['nama'];
  $tahun      = $_POST['tahun'];
  $km         = $_POST['km'];
  $bahanBakar = $_POST['bahan_bakar'];
  $transmisi  = $_POST['transmisi'];
  $fitur      = $_POST['fitur'];
  $harga      = $_POST['harga'];
  $tag        = $_POST['tag'];

  // handle merek (checkbox bisa banyak)
  $merek = "";
  if (!empty($_POST['merek'])) {
    $merek = implode(", ", $_POST['merek']);
  }

  // update tabel cars
  $sqlCars = "UPDATE cars SET 
                nama='$nama',
                tahun='$tahun',
                km='$km',
                bahan_bakar='$bahanBakar',
                transmisi='$transmisi',
                fitur='$fitur',
                merek='$merek',
                harga='$harga',
                tag='$tag'
              WHERE id_cars='$id'";
  mysqli_query($koneksi, $sqlCars);

  // folder upload
  $targetDir = "uploads/";
  if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
  }

  // cek upload gambar baru
  $g1 = $data['gambar1'];
  $g2 = $data['gambar2'];
  $g3 = $data['gambar3'];
  $g4 = $data['gambar4'];

  if (!empty($_FILES['gambar1']['name'])) {
    $g1 = time() . "_1_" . basename($_FILES['gambar1']['name']);
    move_uploaded_file($_FILES['gambar1']['tmp_name'], $targetDir . $g1);
  }
  if (!empty($_FILES['gambar2']['name'])) {
    $g2 = time() . "_2_" . basename($_FILES['gambar2']['name']);
    move_uploaded_file($_FILES['gambar2']['tmp_name'], $targetDir . $g2);
  }
  if (!empty($_FILES['gambar3']['name'])) {
    $g3 = time() . "_3_" . basename($_FILES['gambar3']['name']);
    move_uploaded_file($_FILES['gambar3']['tmp_name'], $targetDir . $g3);
  }
  if (!empty($_FILES['gambar4']['name'])) {
    $g4 = time() . "_4_" . basename($_FILES['gambar4']['name']);
    move_uploaded_file($_FILES['gambar4']['tmp_name'], $targetDir . $g4);
  }

  // update tabel images
  $sqlImg = "UPDATE images SET 
               gambar1='$g1', 
               gambar2='$g2', 
               gambar3='$g3', 
               gambar4='$g4' 
             WHERE id_cars='$id'";
  mysqli_query($koneksi, $sqlImg);

  echo "<script>alert('Data berhasil diupdate!'); window.location='admin.php';</script>";
}

// pecah merek jadi array untuk ditandai saat edit
$merek_selected = [];
if (!empty($data['merek'])) {
  $merek_selected = explode(", ", $data['merek']);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Mobil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 font-sans">

  <div class="max-w-3xl mx-auto p-6 bg-blue-600 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Edit Mobil</h2>

    <form method="post" enctype="multipart/form-data" class="grid grid-cols-2 gap-4 bg-white p-6 rounded shadow">

      <input type="text" name="nama" value="<?php echo $data['nama']; ?>" class="border p-2 rounded" required>
      <input type="number" name="tahun" value="<?php echo $data['tahun']; ?>" class="border p-2 rounded" required>
      <input type="number" name="km" value="<?php echo $data['km']; ?>" class="border p-2 rounded" required>

      <!-- Bahan Bakar -->
      <div class="col-span-2">
        <label class="font-semibold">Bahan Bakar:</label>
        <div class="flex gap-4">
          <?php $bb = $data['bahan_bakar']; ?>
          <label><input type="radio" name="bahan_bakar" value="Bensin" <?php if ($bb=="Bensin") echo "checked"; ?>> Bensin</label>
          <label><input type="radio" name="bahan_bakar" value="Diesel" <?php if ($bb=="Diesel") echo "checked"; ?>> Diesel</label>
          <label><input type="radio" name="bahan_bakar" value="Hybrid" <?php if ($bb=="Hybrid") echo "checked"; ?>> Hybrid</label>
          <label><input type="radio" name="bahan_bakar" value="Listrik" <?php if ($bb=="Listrik") echo "checked"; ?>> Listrik</label>
        </div>
      </div>

      <!-- Transmisi -->
      <div class="col-span-2">
        <label class="font-semibold">Transmisi:</label>
        <div class="flex gap-4">
          <?php $tr = $data['transmisi']; ?>
          <label><input type="radio" name="transmisi" value="Manual" <?php if ($tr=="Manual") echo "checked"; ?>> Manual</label>
          <label><input type="radio" name="transmisi" value="Automatic" <?php if ($tr=="Automatic") echo "checked"; ?>> Automatic</label>
        </div>
      </div>

      <!-- Tipe -->
      <div class="col-span-2">
        <label class="font-semibold">Tipe Mobil:</label>
        <div class="flex gap-4 flex-wrap">
          <?php $ft = $data['fitur']; ?>
          <label><input type="radio" name="fitur" value="SUV" <?php if ($ft=="SUV") echo "checked"; ?>> SUV</label>
          <label><input type="radio" name="fitur" value="Sedan" <?php if ($ft=="Sedan") echo "checked"; ?>> Sedan</label>
          <label><input type="radio" name="fitur" value="MPV" <?php if ($ft=="MPV") echo "checked"; ?>> MPV</label>
          <label><input type="radio" name="fitur" value="Hatchback" <?php if ($ft=="Hatchback") echo "checked"; ?>> Hatchback</label>
          <label><input type="radio" name="fitur" value="Sport" <?php if ($ft=="Sport") echo "checked"; ?>> Sport</label>
        </div>
      </div>

      <!-- Merek Mobil -->
      <div class="col-span-2">
        <label class="font-semibold">Merek Mobil:</label>
        <div class="flex flex-wrap gap-4">
          <?php 
          $daftar_merek = ["Toyota","Honda","Suzuki","Mitsubishi","Daihatsu","Nissan","BMW","Mercedes"];
          foreach ($daftar_merek as $m) {
            $checked = in_array($m, $merek_selected) ? "checked" : "";
            echo "<label><input type='checkbox' name='merek[]' value='$m' $checked> $m</label>";
          }
          ?>
        </div>
      </div>

      <input type="number" name="harga" value="<?php echo $data['harga']; ?>" class="border p-2 rounded" required>

      <!-- Tag -->
      <select name="tag" class="border p-2 rounded" required>
        <?php $tg = $data['tag']; ?>
        <option value="Baru" <?php if($tg=="Baru") echo "selected"; ?>>Baru</option>
        <option value="Best Deal" <?php if($tg=="Best Deal") echo "selected"; ?>>Best Deal</option>
        <option value="Bekas" <?php if($tg=="Bekas") echo "selected"; ?>>Bekas</option>
        <option value="Promo" <?php if($tg=="Promo") echo "selected"; ?>>Promo</option>
      </select>

      <!-- Upload Gambar -->
      <?php for($i=1;$i<=4;$i++): 
        $col = "gambar".$i;
      ?>
        <div class="col-span-2">
          <p class="text-sm font-medium mb-1">Gambar <?php echo $i; ?>:</p>
          <?php if (!empty($data[$col])): ?>
            <img src="uploads/<?php echo $data[$col]; ?>" class="w-32 h-24 object-cover mb-2 rounded border">
          <?php endif; ?>
          <input type="file" name="gambar<?php echo $i; ?>" accept="image/*" class="border p-2 rounded w-full">
        </div>
      <?php endfor; ?>

      <!-- Tombol Aksi -->
      <div class="col-span-2 flex justify-between items-center">
        <a href="admin.php" 
           class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-500">
          Kembali
        </a>
        <button type="submit" name="update" 
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
          Update
        </button>
      </div>

    </form>
  </div>

</body>
</html>
