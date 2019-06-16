<?php
include('../../config/koneksi.php');

// ambil dari url
$get_id_warga = $_GET['id_warga'];

// ambil dari database
$query = "SELECT * FROM warga WHERE id_warga = $get_id_warga";
# $query_kk = "SELECT * FROM warga JOIN kartu_keluarga ON warga.id_warga=kartu_keluarga.id_kepala_keluarga WHERE warga.id_warga=$get_id_warga";

 $query_kk = "SELECT * FROM warga left JOIN warga_has_kartu_keluarga ON warga_has_kartu_keluarga.id_warga=warga.id_warga JOIN kartu_keluarga on kartu_keluarga.id_keluarga=warga_has_kartu_keluarga.id_keluarga WHERE warga.id_warga=$get_id_warga";

#$query_kk = "SELECT * FROM warga left JOIN warga_has_kartu_keluarga ON warga_has_kartu_keluarga.id_warga=warga.id_warga WHERE warga.id_warga=$get_id_warga";

$hasil = mysqli_query($db, $query);
$hasil_kk = mysqli_query($db, $query_kk);

$data_warga = array();
$data_kk = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_warga[] = $row;
}

while ($row = mysqli_fetch_assoc($hasil_kk)) {
  $data_kk[] = $row;
}
