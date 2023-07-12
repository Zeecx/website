<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');

if (isset($_GET['id_aset'])) {
    $id_aset = $_GET['id_aset'];

    // Query untuk menghapus data
    $query = "DELETE FROM aset WHERE id_aset = '$id_aset'";
    $hasil = mysqli_query($db, $query);

    if ($hasil == true) {
        echo "<script>window.alert('Data aset berhasil dihapus'); window.location.href='index.php'</script>";
    } else {
        echo "<script>window.alert('Gagal menghapus data aset'); window.location.href='index.php'</script>";
    }
} else {
    echo "<script>window.location.href='index.php'</script>";
}
?>
