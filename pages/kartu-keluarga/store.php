<?php
session_start();
if (!isset($_SESSION['user'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}

include('../../config/koneksi.php');
include ('data-cek.php');

// ambil data dari form
$nomor_keluarga = htmlspecialchars($_POST['nomor_keluarga']);
$id_kepala_keluarga = htmlspecialchars($_POST['id_kepala_keluarga']);

$alamat_keluarga = htmlspecialchars($_POST['alamat_keluarga']);
$desa_kelurahan_keluarga = htmlspecialchars($_POST['desa_kelurahan_keluarga']);
$kecamatan_keluarga = htmlspecialchars($_POST['kecamatan_keluarga']);
$kabupaten_kota_keluarga = htmlspecialchars($_POST['kabupaten_kota_keluarga']);
$provinsi_keluarga = htmlspecialchars($_POST['provinsi_keluarga']);
$negara_keluarga = htmlspecialchars($_POST['negara_keluarga']);
$rt_keluarga = htmlspecialchars($_POST['rt_keluarga']);
$rw_keluarga = htmlspecialchars($_POST['rw_keluarga']);
$kode_pos_keluarga = htmlspecialchars($_POST['kode_pos_keluarga']);

$id_user = $_SESSION['user']['id_user'];

//cek no_kk dan id_warga yang sudah terdaftar
$query_cek_kk="SELECT nomor_keluarga from kartu_keluarga where nomor_keluarga=$nomor_keluarga";
$query_cek_nik="SELECT id_kepala_keluarga from kartu_keluarga WHERE id_kepala_keluarga=$id_kepala_keluarga";
	
$cek_kk=mysqli_num_rows(mysqli_query($db, $query_cek_kk));
$cek_nik=mysqli_num_rows(mysqli_query($db, $query_cek_nik));
//echo $cek_kk."<br>";
//echo $cek_nik;
if($cek_kk>0){
	echo "<script>window.alert('No Kartu Keluarga $nomor_keluarga sudah terdaftar !');</script>";
		
	# cek NIK terdaftar di no kk yang belum terdaftar 
	if ($cek_nik>0){
		echo "<script>window.alert('NIK sudah terdaftar !'); window.history.back()</script>";
		} else {
		echo "<script>window.history.back()</script>";
	}

} else {

	# cek NIK terdaftar di no kk yang belum terdaftar 
	if ($cek_nik>0){
		echo "<script>window.alert('NIK sudah terdaftar !'); window.history.back() </script>";
		} else {
		//echo "NIK belum digunakan :)";
		//echo "tinggal save database";
	/*
	}

}
*/





	// masukkan ke database
	$query= "INSERT INTO kartu_keluarga (id_keluarga, nomor_keluarga, id_kepala_keluarga, alamat_keluarga, desa_kelurahan_keluarga, kecamatan_keluarga, kabupaten_kota_keluarga, provinsi_keluarga, negara_keluarga, rt_keluarga, rw_keluarga, kode_pos_keluarga, id_user, created_at, updated_at) VALUES (NULL, '$nomor_keluarga', '$id_kepala_keluarga', '$alamat_keluarga', '$desa_kelurahan_keluarga', '$kecamatan_keluarga', '$kabupaten_kota_keluarga', '$provinsi_keluarga', '$negara_keluarga', '$rt_keluarga', '$rw_keluarga', '$kode_pos_keluarga', '$id_user', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000');";

	$hasil = mysqli_query($db, $query);

	//echo $query;
	// id terakhir

	// cek keberhasilan pendambahan data
	if ($hasil == true) {	
 		echo "<script>window.alert('Tambah kartu keluarga berhasil'); window.location.href='../kartu-keluarga/index.php'</script>";
	} else {
  		echo "<script>window.alert('Tambah kartu keluarga gagal!'); window.history.back()'</script>";
  		echo mysqli_error($db);
	}
}
}
