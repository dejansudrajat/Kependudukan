<?php
include('../../config/koneksi.php');

// ambil dari database
$query = "SELECT mutasi.id_mutasi, nik_warga,nama_warga,jenis_kelamin_warga,pendidikan_terakhir_warga,pekerjaan_warga,status_perkawinan_warga,status_warga, TIMESTAMPDIFF(YEAR, `tanggal_lahir_mutasi`, CURDATE()) AS usia_mutasi FROM warga JOIN mutasi ON warga.id_warga = mutasi.id_warga";

$hasil = mysqli_query($db, $query);

$data_mutasi = array();

if(mysqli_num_rows($hasil) != 0){

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_mutasi[] = $row;
  }
} else {
	return null;
}
