<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT mutasi_keluar.id_mutasi,nik_warga,nama_warga,jenis_kelamin_warga,pendidikan_terakhir_warga,pekerjaan_warga, status_warga, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_mutasi FROM warga JOIN mutasi_keluar ON warga.id_warga = mutasi_keluar.id_warga";

$hasil = mysqli_query($db, $query);

$data_mutasi = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
}