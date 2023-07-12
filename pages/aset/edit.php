<?php
session_start();
if (!isset($_SESSION['user'])) {
  // Jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

if (isset($_POST['id_aset'])) {
    $id_aset = $_POST['id_aset'];
    $id_aset_keluarga = htmlspecialchars($_POST['id_aset_keluarga']);
    $jumlah_motor = isset($_POST['jumlah_motor']) ? (int) $_POST['jumlah_motor'] : 0;
    $jumlah_mobil = isset($_POST['jumlah_mobil']) ? (int) $_POST['jumlah_mobil'] : 0;
    $jumlah_kekayaan = isset($_POST['jumlah_kekayaan']) ? (float) $_POST['jumlah_kekayaan'] : 0;

    // Query untuk mengubah data
    $query = "UPDATE aset SET id_aset_keluarga = '$id_aset_keluarga', jumlah_motor = $jumlah_motor, jumlah_mobil = $jumlah_mobil, jumlah_kekayaan = $jumlah_kekayaan WHERE id_aset = '$id_aset'";
    $hasil = mysqli_query($db, $query);

    if ($hasil == true) {
        echo "<script>window.alert('Data aset berhasil diubah'); window.location.href='index.php'</script>";
    } else {
        echo "<script>window.alert('Gagal mengubah data aset'); window.location.href='index.php'</script>";
    }
} else {
    echo "<script>window.location.href='index.php'</script>";
}
?>
