<?php
include('../../config/koneksi.php');

// ambil dari database
# $query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga";
# $query = "SELECT * FROM tbl_meninggal";
$query = "SELECT *, warga.nama_warga, warga.jenis_kelamin_warga FROM `tbl_meninggal` JOIN warga on warga.id_warga=tbl_meninggal.id_warga";
$hasil = mysqli_query($db, $query);

$data_kematian = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kematian[] = $row;
}

// hitung kelahiran
$query_jumlah_kematian = "SELECT COUNT(*) AS total FROM tbl_meninggal";
$hasil_jumlah_kematian = mysqli_query($db, $query_jumlah_kematian);
$jumlah_kematian = mysqli_fetch_assoc($hasil_jumlah_kematian);

