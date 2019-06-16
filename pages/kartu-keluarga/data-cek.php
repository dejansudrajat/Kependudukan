<?php
include('../../config/koneksi.php');

$query="SELECT warga.id_warga, warga.nik_warga, warga.nama_warga, kartu_keluarga.nomor_keluarga, kartu_keluarga.id_kepala_keluarga FROM warga JOIN kartu_keluarga WHERE kartu_keluarga.id_kepala_keluarga=warga.id_warga";

$query_exe=mysqli_query($db, $query);
$data_cek=array();

while ($param_cek=mysqli_fetch_array($query_exe)) {
	# code...
	$data_cek[]=$param_cek;
}
/*
foreach ($data_cek as $dt_cek) {
	# code...
	/*
	echo " | id_warga = ".$dt_cek['id_warga'];
	echo " | nik_warga = ".$dt_cek['nik_warga'];
	echo " | nama_warga = ".$dt_cek['nama_warga'];
	echo " | nomor_keluarga =".$dt_cek['nomor_keluarga'];
	echo " | id_kepala_keluarga =".$dt_cek['id_kepala_keluarga']."<br>";
	$dt_cek['id_warga'];


}
	*/

?>