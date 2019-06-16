<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_mutasi = $_GET['id_mutasi'];

// ambil dari database
$query = "SELECT * FROM mutasi_keluar JOIN warga ON mutasi_keluar.id_warga = warga.id_warga WHERE id_mutasi = $get_id_mutasi";


$hasil = mysqli_query($db, $query);

$data_mutasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
 $data_mutasi[] = $row;
}

//ambil dari warga
$query_warga = "SELECT * FROM warga JOIN mutasi_keluar ON warga.id_warga = mutasi_keluar.id_warga WHERE mutasi_keluar.id_mutasi = $get_id_mutasi";

$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
}
