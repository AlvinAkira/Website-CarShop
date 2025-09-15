<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ambil data gambar dari tabel images
    $qImg = mysqli_query($koneksi, "SELECT * FROM images WHERE id_cars='$id'");
    $img = mysqli_fetch_assoc($qImg);

    if ($img) {
        $targetDir = "uploads/";

        // hapus masing-masing file gambar jika ada
        for ($i = 1; $i <= 4; $i++) {
            $col = "gambar" . $i;
            if (!empty($img[$col]) && file_exists($targetDir . $img[$col])) {
                unlink($targetDir . $img[$col]); // hapus file dari folder
            }
        }

        // hapus dari tabel images
        mysqli_query($koneksi, "DELETE FROM images WHERE id_cars='$id'");
    }

    // hapus dari tabel cars
    mysqli_query($koneksi, "DELETE FROM cars WHERE id_cars='$id'");

    echo "<script>alert('Data mobil berhasil dihapus!'); window.location='admin.php';</script>";
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location='admin.php';</script>";
}
