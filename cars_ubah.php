<?php
include "koneksi.php";

// ambil data berdasarkan id (pastikan id numeric)
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
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
  $nama       = mysqli_real_escape_string($koneksi, $_POST['nama']);
  $tahun      = intval($_POST['tahun']);
  $km         = intval($_POST['km']);
  $bahanBakar = mysqli_real_escape_string($koneksi, $_POST['bahan_bakar']);
  $transmisi  = mysqli_real_escape_string($koneksi, $_POST['transmisi']);
  $fitur      = mysqli_real_escape_string($koneksi, $_POST['fitur']);
  $harga      = mysqli_real_escape_string($koneksi, $_POST['harga']);
  $tag        = mysqli_real_escape_string($koneksi, $_POST['tag']);
  $deskripsi  = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

  // handle merek (checkbox bisa banyak)
  $merek = "";
  if (!empty($_POST['merek'])) {
    $clean = array_map(function($m){ return htmlspecialchars($m, ENT_QUOTES); }, $_POST['merek']);
    $merek = implode(", ", $clean);
  }

  // update tabel cars (pastikan kolom deskripsi ada)
  $sqlCars = "UPDATE cars SET 
                nama='$nama',
                tahun='$tahun',
                km='$km',
                bahan_bakar='$bahanBakar',
                transmisi='$transmisi',
                fitur='$fitur',
                merek='$merek',
                harga='$harga',
                tag='$tag',
                deskripsi='$deskripsi'
              WHERE id_cars='$id'";

  $cars_ok = mysqli_query($koneksi, $sqlCars);

  // folder upload
  $targetDir = "uploads/";
  if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
  }

  // ambil nama gambar lama sebagai fallback
  $g1 = $data['gambar1'];
  $g2 = $data['gambar2'];
  $g3 = $data['gambar3'];
  $g4 = $data['gambar4'];

  // fungsi bantu generate nama file aman
  function gen_name($id, $i, $filename) {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    $safe = preg_replace("/[^a-zA-Z0-9-_]/", "_", pathinfo($filename, PATHINFO_FILENAME));
    return "car_{$id}_{$i}_" . time() . "_" . $safe . "." . $ext;
  }

  // loop upload 4 gambar, hapus file lama jika diganti
  for ($i=1; $i<=4; $i++) {
    $col = "gambar".$i;
    if (!empty($_FILES[$col]['name'])) {
      // hapus file lama jika ada
      if (!empty($data[$col]) && file_exists($targetDir . $data[$col])) {
        @unlink($targetDir . $data[$col]);
      }
      $newname = gen_name($id, $i, $_FILES[$col]['name']);
      if (move_uploaded_file($_FILES[$col]['tmp_name'], $targetDir . $newname)) {
        ${"g".$i} = $newname;
      }
    }
  }

  // update tabel images
  $sqlImg = "UPDATE images SET 
               gambar1='".mysqli_real_escape_string($koneksi, $g1)."', 
               gambar2='".mysqli_real_escape_string($koneksi, $g2)."', 
               gambar3='".mysqli_real_escape_string($koneksi, $g3)."', 
               gambar4='".mysqli_real_escape_string($koneksi, $g4)."'
             WHERE id_cars='$id'";
  $img_ok = mysqli_query($koneksi, $sqlImg);

  if ($cars_ok && $img_ok) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='admin.php';</script>";
    exit;
  } else {
    $err = mysqli_error($koneksi);
    echo "<script>alert('Terjadi error: ". addslashes($err) ."');</script>";
  }
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
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-white min-h-screen font-sans text-slate-800">

  <div class="max-w-4xl mx-auto p-6">
    <a href="admin.php" class="inline-flex items-center gap-2 text-sm text-slate-600 hover:underline mb-4">
      ← Kembali ke Dashboard
    </a>

   <div class="bg-white shadow-2xl rounded-2xl overflow-hidden">
  <!-- Header dengan background biru -->
  <div class="p-6 border-b bg-blue-600">
    <h2 class="text-2xl font-semibold text-white">Edit Mobil</h2>
    <p class="text-sm text-blue-100 mt-1">
      Perbarui data mobil dan foto. Kosongkan file input jika tidak ingin mengganti gambar.
    </p>
  </div>


      <form method="post" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
        <!-- Left: gambar preview -->
        <div class="md:col-span-1 space-y-4">
          <div class="rounded-lg border p-3 bg-gradient-to-b from-slate-50 to-white">
            <p class="text-sm font-medium text-slate-700 mb-2">Preview Gambar</p>
            <div class="flex gap-2 overflow-x-auto pb-2">
              <?php for($i=1;$i<=4;$i++): $col = "gambar".$i; ?>
                <?php if (!empty($data[$col])): ?>
                  <div class="min-w-[120px] rounded-lg overflow-hidden border">
                    <img src="uploads/<?php echo htmlspecialchars($data[$col]); ?>" alt="Gambar <?php echo $i; ?>" class="w-32 h-20 object-cover block">
                    <p class="text-xs text-center p-1 bg-slate-100"><?php echo "Gambar {$i}"; ?></p>
                  </div>
                <?php else: ?>
                  <div class="min-w-[120px] flex items-center justify-center h-24 bg-slate-50 text-slate-400 rounded-lg border">
                    <span class="text-xs">Kosong</span>
                  </div>
                <?php endif; ?>
              <?php endfor; ?>
            </div>
            <p class="text-xs text-slate-500 mt-2">Tip: unggah gambar berkualitas minimal 800x600 untuk hasil terbaik.</p>
          </div>

          <div class="rounded-lg border p-3 bg-white">
            <p class="text-sm font-medium text-slate-700 mb-2">Info Singkat</p>
            <ul class="text-sm text-slate-600 space-y-1">
              <li><strong>Nama:</strong> <?php echo htmlspecialchars($data['nama']); ?></li>
              <li><strong>Tahun:</strong> <?php echo htmlspecialchars($data['tahun']); ?></li>
              <li><strong>KM:</strong> <?php echo htmlspecialchars($data['km']); ?></li>
              <li><strong>Tag:</strong> <?php echo htmlspecialchars($data['tag']); ?></li>
            </ul>
          </div>
        </div>

        <!-- Right: form fields -->
        <div class="md:col-span-2 grid grid-cols-1 gap-4">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Nama Mobil</label>
              <input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Tahun</label>
              <input type="number" name="tahun" value="<?php echo htmlspecialchars($data['tahun']); ?>" class="w-full border rounded-lg px-3 py-2" required>
            </div>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">KM</label>
              <input type="number" name="km" value="<?php echo htmlspecialchars($data['km']); ?>" class="w-full border rounded-lg px-3 py-2" required>
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Harga (IDR)</label>
              <input type="text" name="harga" value="<?php echo htmlspecialchars($data['harga']); ?>" class="w-full border rounded-lg px-3 py-2" required>
            </div>
          </div>

          <!-- DESKRIPSI (baru) -->
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Deskripsi</label>
            <textarea name="deskripsi" rows="4" class="w-full border rounded-lg px-3 py-2 resize-y" placeholder="Tuliskan deskripsi singkat: kondisi, fitur tambahan, riwayat servis, dll."><?php echo isset($data['deskripsi']) ? htmlspecialchars($data['deskripsi']) : ''; ?></textarea>
            <p class="text-xs text-slate-500 mt-1">Deskripsi akan tampil di halaman detail mobil — tulis poin penting seperti kondisi, servis terakhir, dan fitur unggulan.</p>
          </div>

          <!-- Bahan Bakar & Transmisi -->
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Bahan Bakar</label>
              <div class="flex gap-3 flex-wrap">
                <?php $bb = $data['bahan_bakar']; ?>
                <?php $opts_bb = ["Bensin","Diesel","Hybrid","Listrik"]; ?>
                <?php foreach($opts_bb as $o): ?>
                  <label class="inline-flex items-center gap-2 text-sm">
                    <input type="radio" name="bahan_bakar" value="<?php echo $o; ?>" <?php if ($bb==$o) echo "checked"; ?> class="form-radio">
                    <?php echo $o; ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Transmisi</label>
              <div class="flex gap-3">
                <?php $tr = $data['transmisi']; ?>
                <label class="inline-flex items-center gap-2 text-sm"><input type="radio" name="transmisi" value="Manual" <?php if ($tr=="Manual") echo "checked"; ?>> Manual</label>
                <label class="inline-flex items-center gap-2 text-sm"><input type="radio" name="transmisi" value="Automatic" <?php if ($tr=="Automatic") echo "checked"; ?>> Automatic</label>
              </div>
            </div>
          </div>

          <!-- Tipe & Merek -->
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tipe Mobil</label>
            <div class="flex gap-3 flex-wrap">
              <?php $ft = $data['fitur']; $types = ["SUV","Sedan","MPV","Hatchback","Sport"]; ?>
              <?php foreach($types as $t): ?>
                <label class="inline-flex items-center gap-2 text-sm"><input type="radio" name="fitur" value="<?php echo $t; ?>" <?php if ($ft==$t) echo "checked"; ?>> <?php echo $t; ?></label>
              <?php endforeach; ?>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Merek Mobil</label>
            <div class="flex gap-3 flex-wrap">
              <?php 
              $daftar_merek = ["Toyota","Honda","Suzuki","Mitsubishi","Daihatsu","Nissan","BMW","Mercedes"];
              foreach ($daftar_merek as $m) {
                $checked = in_array($m, $merek_selected) ? "checked" : "";
                echo "<label class='inline-flex items-center gap-2 text-sm'><input type='checkbox' name='merek[]' value='$m' $checked> $m</label>";
              }
              ?>
            </div>
          </div>

          <!-- Tag -->
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">Tag</label>
            <select name="tag" class="w-48 border rounded-lg px-3 py-2">
              <?php $tg = $data['tag']; ?>
              <option value="Baru" <?php if($tg=="Baru") echo "selected"; ?>>Baru</option>
              <option value="Best Deal" <?php if($tg=="Best Deal") echo "selected"; ?>>Best Deal</option>
              <option value="Bekas" <?php if($tg=="Bekas") echo "selected"; ?>>Bekas</option>
              <option value="Promo" <?php if($tg=="Promo") echo "selected"; ?>>Promo</option>
            </select>
          </div>

          <!-- Upload Gambar -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <?php for($i=1;$i<=4;$i++): $col = "gambar".$i; ?>
            <div class="border rounded-lg p-3 bg-slate-50">
              <p class="text-sm font-medium mb-2">Gambar <?php echo $i; ?></p>
              <?php if (!empty($data[$col])): ?>
                <img src="uploads/<?php echo htmlspecialchars($data[$col]); ?>" class="w-full h-44 object-cover rounded mb-2 border">
              <?php else: ?>
                <div class="w-full h-44 bg-white rounded mb-2 border flex items-center justify-center text-slate-300">Tidak ada gambar</div>
              <?php endif; ?>
              <input type="file" name="gambar<?php echo $i; ?>" accept="image/*" class="w-full text-sm">
            </div>
            <?php endfor; ?>
          </div>

          <!-- Tombol Aksi -->
          <div class="flex items-center justify-between gap-4 pt-2">
            <a href="admin.php" class="inline-flex items-center gap-2 px-4 py-2 rounded-lg border text-sm text-slate-700 hover:bg-slate-50">Batal</a>
            <div class="flex gap-3">
              <button type="submit" name="update" class="inline-flex items-center gap-2 bg-gradient-to-r from-blue-600 to-indigo-600 text-white px-5 py-2 rounded-lg shadow hover:brightness-105">
                Simpan Perubahan
              </button>
            </div>
          </div>

        </div>
      </form>
    </div>
  </div>

</body>
</html>
