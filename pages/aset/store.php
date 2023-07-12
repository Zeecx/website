<?php
session_start();
if (!isset($_SESSION['user'])) {
  // Jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

// Ambil data dari form
$id_aset_keluarga = htmlspecialchars($_POST['id_aset_keluarga']);
$jumlah_motor = isset($_POST['jumlah_motor']) ? (int) $_POST['jumlah_motor'] : 0;
$jumlah_mobil = isset($_POST['jumlah_mobil']) ? (int) $_POST['jumlah_mobil'] : 0;
$jumlah_kekayaan = isset($_POST['jumlah_kekayaan']) ? (float) $_POST['jumlah_kekayaan'] : 0;

$id_user = $_SESSION['user']['id_user'];

// Masukkan ke database
$query = "INSERT INTO aset (id_aset_keluarga, jumlah_motor, jumlah_mobil, jumlah_kekayaan) VALUES ('$id_aset_keluarga', $jumlah_motor, $jumlah_mobil, $jumlah_kekayaan)";
$hasil = mysqli_query($db, $query);

// Cek keberhasilan penambahan data
if ($hasil == true) {
  echo "<script>window.alert('Tambah aset keluarga berhasil'); window.location.href='../aset/create.php'</script>";
} else {
  echo "<script>window.alert('Tambah aset keluarga gagal!'); window.location.href='../aset/create.php'</script>";
}
?>
