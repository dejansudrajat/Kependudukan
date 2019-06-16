<?php
include('../../config/koneksi.php');

// ambil dari database
# $query = "SELECT *, TIMESTAMPDIFF(YEAR, `tanggal_lahir_warga`, CURDATE()) AS usia_warga FROM warga";


//get by id
$query = "SELECT *, warga.nama_warga, warga.jenis_kelamin_warga FROM `tbl_meninggal` JOIN warga on warga.id_warga=tbl_meninggal.id_warga WHERE id_meninggal ='$id_kematian'";
$hasil = mysqli_query($db, $query);

$data_kematian = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_kematian[] = $row;
}