<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM kartu_keluarga";

$hasil = mysqli_query($db, $query);

$data_kartu_keluarga = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kartu_keluarga[] = $row;
}
