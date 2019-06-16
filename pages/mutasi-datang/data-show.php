<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_mutasi = $_GET['id_mutasi_masuk'];

// ambil dari database
$query = "SELECT * FROM mutasi_masuk JOIN warga ON mutasi_masuk.id_warga = warga.nik_warga WHERE id_mutasi_masuk = $get_id_mutasi";

$hasil = mysqli_query($db, $query);

$data_mutasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
 $data_mutasi[] = $row;
}

//ambil dari warga
$query_warga = "SELECT * FROM warga JOIN mutasi_masuk ON warga.nik_warga = mutasi_masuk.id_warga WHERE mutasi_masuk.id_mutasi_masuk = $get_id_mutasi";

$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)) {
  $data_warga[] = $row_warga;
}
