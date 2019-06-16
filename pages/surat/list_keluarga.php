<?php
include('../../config/koneksi.php');

// ambil dari url

//ambil data kk
$query_keluarga = "SELECT warga.nama_warga, kartu_keluarga.nomor_keluarga FROM warga JOIN kartu_keluarga ON warga.id_warga=kartu_keluarga.id_kepala_keluarga ";

$hasil_keluarga = mysqli_query($db, $query_keluarga);

$data_keluarga = array();

while ($row_keluarga = mysqli_fetch_assoc($hasil_keluarga)){
	$data_keluarga[] = $row_keluarga;
}

//ambil warga
$query_warga = "SELECT nama_warga,nik_warga,id_warga FROM warga";

$hasil_warga = mysqli_query($db, $query_warga);

$data_warga = array();

while ($row_warga = mysqli_fetch_assoc($hasil_warga)){
	$data_warga[] = $row_warga;
}

//ambil ibu
$query_ibu = "SELECT nama_warga,nik_warga,id_warga FROM `warga`WHERE jenis_kelamin_warga = 'p'";

$hasil_ibu = mysqli_query($db, $query_ibu);

$data_ibu = array();

while ($row_ibu = mysqli_fetch_assoc($hasil_ibu)){
	$data_ibu[] = $row_ibu;
}

//ambil ayah
$query_ayah = "SELECT nama_warga,nik_warga,id_warga FROM `warga`WHERE jenis_kelamin_warga = 'l'";

$hasil_ayah = mysqli_query($db, $query_ayah);

$data_ayah = array();

while ($row_ayah = mysqli_fetch_assoc($hasil_ayah)){
	$data_ayah[] = $row_ayah;
}




