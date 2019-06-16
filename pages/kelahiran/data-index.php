<?php
include('../../config/koneksi.php');

// ambil dari database
# $query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga";
$query = "SELECT * FROM tbl_kelahiran";

$hasil = mysqli_query($db, $query);

$data_lahir = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_lahir[] = $row;
}

// hitung kelahiran
$query_jumlah_kelahiran = "SELECT COUNT(*) AS total FROM tbl_kelahiran";
$hasil_jumlah_kelahiran = mysqli_query($db, $query_jumlah_kelahiran);
$jumlah_kelahiran = mysqli_fetch_assoc($hasil_jumlah_kelahiran);

