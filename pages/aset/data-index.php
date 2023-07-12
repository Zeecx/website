<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT * FROM aset LEFT JOIN kartu_keluarga ON aset.id_aset_keluarga = kartu_keluarga.id_kepala_keluarga";

$hasil = mysqli_query($db, $query);

$data_aset = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_aset[] = $row;
}
